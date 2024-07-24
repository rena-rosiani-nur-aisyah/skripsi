<?php

namespace App\Http\Controllers;

use Log;
use App\Models\Fact;
use App\Models\post;
use App\Models\rule;
use App\Models\User;
use forwardChaining;
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



class DiagnosisController extends Controller
{
    public function index()
    {
        $items = diagnosis::all();
        $data = [
            'items' => $items
        ];
        return view('category.admin.diagnosis.detailDiagnosis', compact('data'));
    }



    public function create()
    {
        $gejala = gejala::where('type', 'gejala')->first();
        return view('users.diagnosis.diagnosis-user', compact('gejala'));
    }


    public function store(Request $request)
    {

        $diagnosis = new diagnosis();
        $diagnosis->user_id = auth()->user()->id;
        $diagnosis->gejala_id = $request->input('gejala_id');
        $diagnosis->jawabanUser = $request->input('jawabanUser');
        $diagnosis->save();

        //ambil dan tampilkan gejala atau signs selanjutnya
        $next = $this->getNextQuestion($diagnosis->gejala_id, $diagnosis->jawabanUser);
        if ($next) {
            return redirect()->route('diagnosis.store', ['gejala_id' => $next->id]);
        } else {
            return redirect()->route('hasilUser');
        }
    }

    private function getNextQuestion($gejala_id, $jawabanUser)
    {
        $currentGejala = gejala::find($gejala_id);

        //menentukan tipe pertanyaan selanjutnya
        $nextType = $currentGejala->type == 'gejala' ? 'signs' : 'gejala';

        //ngambil pertayaan atau gejala berikutnya
        $next = gejala::where('id', '>', $gejala_id)
            ->where('type', $nextType)
            ->first();

        return $next;
    }


    // untuk menampilkan halaman diagnos yang beriisi user dan hasil diagnosis untuk sisi ADMIN
    public function show($id)
    {
        //
    }



    // public function update(Request $request, $id)
    // {
    //     $post = diagnosis::find($id);
    //     $post->update($request->all());
    //     return redirect(url('/diagnosa'))->with('Berhasil', 'Data telah dihapus.');
    // }


    public function destroy($id)
    {
        $post = diagnosis::find($id);
        $post->delete();
        return redirect(url('/diagnosa'))->with('Berhasil,', 'Data telah dihapus');
    }


    //menghubungkan dengan algoritma forward chaining dalam kelas forwardChaining




}
