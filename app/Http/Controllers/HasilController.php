<?php

namespace App\Http\Controllers;

use App\Models\diagnosis;
use App\Models\hasil;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = hasil::all();
        $data = [
            'items' => $items
        ];
        return view('category.admin.diagnosis.HasilDiagnosis', compact('data'));
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
     * @param  \App\Http\Requests\StorejawabanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = diagnosis::find($id);
        return view('category.admin.diagnosis.detailDiagnosis', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function edit(hasil $jawaban)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatejawabanRequest  $request
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jawaban  $jawaban
     * @return \Illuminate\Http\Response
     */
    public function destroy(hasil $hasil)
    {
        hasil::destroy($hasil->id);
        return redirect('/diagnosis')->with('success', 'Data berhasil dihapus');
    }
}
