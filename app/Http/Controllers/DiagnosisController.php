<?php

namespace App\Http\Controllers;

use App\Models\diagnosis;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorediagnosisRequest;
use App\Http\Requests\UpdatediagnosisRequest;
use App\Models\gejala;
use App\Models\post;
use App\Models\rule;
use App\Models\User;
use forwardChaining;
use App\Http\Models\FactCollection;
use App\Models\Fact;
use Laravel\Prompts\ConfirmPrompt;



class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('diagnosis')->get();
        // dd($items);
        $data = [
            'items' => $items
        ];
        return view('category.admin.diagnosis.diagnos', $data);
    }



    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        // ngambil dulu data dari db kan
        $rule = rule::all();

        //inisiasi array kosong untuk nyimpen jawaban dari user dulu
        $jawaban = [];

        foreach ($request->input('jawaban') as $gejalaId => $jawaban) {
            $jawaban[$gejalaId] = $jawaban;
        }

        $diagnosis = $this->forwardChaning($rule, $jawaban);

        //kode untuk menyimpan jawaban user
        $diagnosis = diagnosis::create([
            'user_id' => auth()->id(),
            'jawaban' => json_encode($jawaban),
            'diagnosis' => $diagnosis
        ]);
        return redirect()->route('admin.diagnosis.diagnos', ['diagnosis' => $diagnosis]);
    }


    public function show(Diagnosis $diagnosis, $id)
    {
        $post = diagnosis::find($id);
        // dd($post);
        $gejala = $diagnosis->gejala;
        $user = $diagnosis->user;
        $jawaban = $diagnosis->jawaban;
        return view('category.admin.diagnosis.diagnos', compact('diagnosis', 'gejala', 'user', 'jawaban'));
    }

    public function showHasilDiagnosis(diagnosis $diagnosis)
    {
        $penyakit = post::find($diagnosis->post_id);
        $name = $penyakit->name;
        $Penyebab = $penyakit->Penyebab;
        $solusi = $penyakit->Solusi;
        return view('category.admin.hasilDiagnosis', compact('penyakit', 'Penyebab', 'Solusi'));
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

    // tampilan untuk di diagnosis user nya
    public function askDiagnosis(Request $request)
    {
        $gejala = gejala::all();
        return view('users.diagnosis-user', compact('gejala'));
    }

    //menghubungkan dengan algoritma forward chaining dalam kelas forwardChaining
    public function diagnosa(Request $request)
    {
        $gejala = gejala::find($request->gejala_id);
        $rule = $gejala->rule;

        $jawaban = [];

        foreach ($rule as $rules) {
            $jawab = $request->input($rules->gejala->gejala);
            $jawab[$rules->gejala->id] = $jawab;
        }

        $fact = new Fact($gejala->toArrray(), $gejala->id);
        $forwardChaining = new forwardChaining($rule, $jawaban, $fact);
        $post = $forwardChaining->diagnosa();

        return view('category.admin.diagnosis.diagnos', compact('post'));
    }


    public function jawaban(Request $request)
    {
        $gejala_id = $request->input('gejala_id');
        $jawaban = $request->input('jawaban');

        // Update the diagnosis data based on the symptom ID and answer

        return redirect()->route('diagnosis');
    }
}
