<?php

namespace App\Http\Controllers;

use App\Models\Fact;
use App\Models\post;
use App\Models\rule;
use App\Models\User;
use App\Models\hasil;
use App\Services\ForwardChaining;
use App\Models\gejala;
use App\Models\diagnosis;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Laravel\Prompts\ConfirmPrompt;
use App\Http\Models\FactCollection;
use App\Http\Requests\StorediagnosisRequest;
use App\Http\Requests\UpdatediagnosisRequest;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Log;



class DiagnosisController extends Controller
{

    private $forwardChaining;

    public function __construct(ForwardChaining $forwardChaining)
    {
        $this->forwardChaining = $forwardChaining;
    }

    public function create()
    {
        // Ambil fakta awal yang bertipe 'gejala'
        $initialFact = Gejala::where('type', 'gejala')->first();

        // Tambahkan fakta awal ke forward chaining
        if ($initialFact) {
            $this->forwardChaining->addFact($initialFact, null);
        } else {
            Log::error('No initial fact found');
        }

        // Kirim fakta awal ke view
        return view('users.diagnosis.diagnosis-user', ['gejala' => $initialFact]);
    }


    public function store(Request $request)
    {
        $diagnosis = new Diagnosis();
        $diagnosis->user_id = auth()->user()->id;
        $diagnosis->gejala_id = $request->input('gejala_id');
        $diagnosis->jawabanUser = $request->input('jawabanUser');
        $diagnosis->save();

        // Logging untuk debugging
        Log::info('Diagnosis saved', ['diagnosis' => $diagnosis]);

        // proses ke forward chaining nya
        $forwardChaining = new ForwardChaining();

        // nambahin current fact (gejala)
        $currentGejala = Gejala::find($request->input('gejala_id'));
        if ($currentGejala) {
            $this->forwardChaining->addFact($currentGejala, $request->input('jawabanUser'));
        } else {
            Log::error('Gejala not found', ['gejala_id' => $request->input('gejala_id')]);
        }


        // jalankan algoritma fc nya bersamaan dengan jawabanUser
        $this->forwardChaining->runForwardChaining($request->input('jawabanUser'));

        // ini hasil diagnosis
        $result = $this->forwardChaining->getDiagnosisResult();

        // Logging untuk debugging
        Log::info('Forward Chaining result', ['result' => $result]);

        if ($result) {
            // nyimpen hasil diagnosis ke tabel hasil
            Hasil::create([
                'user_id' => auth()->user()->id,
                'post_id' => $result->id,
            ]);


            return view('users.diagnosis.HasilDiagnosisUser', ['result' => $result]);
        } else {
            // kalau gk nemuin, ambil pertanyaan selanjutnya
            $nextQuestion = $this->forwardChaining->getNextQuestion();
            Log::info('Next question', ['nextQuestion' => $nextQuestion]);
            $allData = collect([$nextQuestion]);

            return view('users.diagnosis.diagnosis-user', compact('allData'));
        }
        try {
            // Logika diagnosis
        } catch (\Exception $e) {
            Log::error('Error in diagnosis process: ' . $e->getMessage());
            return view('error.diagnosis')->with('message', 'Terjadi kesalahan dalam proses diagnosis.');
        }
    }


    // untuk menampilkan halaman diagnos yang beriisi user dan hasil diagnosis untuk sisi ADMIN
    public function show($id)
    {
        //
    }






    public function destroy($id)
    {
        $post = diagnosis::find($id);
        $post->delete();
        return redirect(url('/diagnosa'))->with('Berhasil,', 'Data telah dihapus');
    }
}
