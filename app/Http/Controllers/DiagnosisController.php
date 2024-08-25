<?php

namespace App\Http\Controllers;


use App\Models\diagnosis;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Laravel\Prompts\ConfirmPrompt;
use App\Http\Models\FactCollection;
use App\Http\Requests\StorediagnosisRequest;
use App\Http\Requests\UpdatediagnosisRequest;
use App\Models\question;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Log;



class DiagnosisController extends Controller
{


    public function create(Request $request)
    {
        $startstep = 1; //mulai step yang pertama
        $step = $request->input('step'); // Step pertanyaan
        $answer = $request->input('answer');
        $gejalaid = $request->input('gejala_id');
        $nextQuestion = null;
        $finalResult = null;
        //jika step tidak ada
        if (!$step) {
            $currentQuestion = DB::table('questions')->where('id', $startstep)->first();
            $nextQuestion = $currentQuestion;
            $dataq = $currentQuestion;
            $step += 1;
        }

        if ($answer) {
            $question = DB::table('questions')->where('id', $gejalaid)->first();
            if ($answer == 'yes') {
                $nextQuestionText  = $question->is_yes;
            } else if ($answer == 'no') {
                $nextQuestionText  = $question->is_no;
            }
            $ceknextQuestion = DB::table('questions')->where('pertanyaan', $nextQuestionText)->first();
            // Cek apakah nextQuestion adalah pertanyaan atau hasil akhir
            if ($ceknextQuestion) {
                $step += 1;
                $nextQuestion = $ceknextQuestion;
            } else {
                $finalResult = $nextQuestionText;
            }
        }

        return view('users.diagnosis.diagnosis-user', [
            'step' => $step,
            'nextQuestion' => $nextQuestion,
            'finalResult' => $finalResult
        ]);
    }


    public function simpanhasil(Request $request)
    {
        $input = $request->all();
        $input = $request->except('_token');
        // dd($input);
        DB::table('riwayats')->insert($input);
        return redirect('/riwayat');
    }

    public function store(Request $request)
    {
        //
    }

    // untuk menampilkan halaman diagnos yang beriisi user dan hasil diagnosis untuk sisi ADMIN
    public function show($id)
    {
        //
    }


    public function destroy($id)
    {
        // $post = diagnosis::find($id);
        // $post->delete();
        // return redirect(url('/diagnosa'))->with('Berhasil,', 'Data telah dihapus');
    }
}
