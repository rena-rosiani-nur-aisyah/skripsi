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



class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items = DB::table('diagnosis')->get();
        // // dd($items);
        // $data = [
        //     'items' => $items
        // ];
        // return view('category.admin.diagnosis.hasil.diagnos', $data);

        $gejala = gejala::all();
        return view('users.diagnosis-user', compact('gejala'));
    }

    public function diagnosis()
    {
        $items = DB::table('diagnosis')->get();
        $data = [
            'items' => $items
        ];
        return view('users.diagnosis-user');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorediagnosisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kode' => 'required',
            'kode_gejala' => 'required',
            'hasil' => 'required'
        ]);
        $insert = diagnosis::create([
            'kode' => $request->kode,
            'kode_gejala' => $request->kode_gejala,
            'hasil' => $request->hasil
        ]);
        return redirect('/diagnosa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = diagnosis::find($id);
        // dd($post);
        return view('category.admin.diagnosis.hasil.ediagnosis', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatediagnosisRequest  $request
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = diagnosis::find($id);
        $post->update($request->all());
        return redirect(url('/diagnosa'))->with('Berhasil', 'Data telah dihapus.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = diagnosis::find($id);
        $post->delete();
        return redirect(url('/diagnosa'))->with('Berhasil,', 'Data telah dihapus');
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

        return view('category.admin.diagnosis.hasil.diagnos', compact('post'));
    }

    public function getGejala($userId)
    {
        $gejala = diagnosis::where('user_foreignId', $userId)->pluck('gejala_foreignId');
        return view('users.diagnosis-user', compact('gejala'));
    }
}
