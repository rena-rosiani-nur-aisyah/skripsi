<?php

namespace App\Http\Controllers;

use App\Models\diagnosis;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorediagnosisRequest;
use App\Http\Requests\UpdatediagnosisRequest;
use App\Models\post;

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
        return view('category.admin.diagnosis.hasil.diagnos', $data);
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
    // public function edit($id)
    // {
    //     $post = diagnosis::find($id);
    //     $data = [
    //         'post' => $post
    //     ];
    //     return view('partials.edit.ediagnosis', $data);
    // }

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
}
