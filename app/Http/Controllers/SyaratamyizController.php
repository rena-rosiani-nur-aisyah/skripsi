<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB as FacadesDB;
use DB;
use Illuminate\Http\Request;
use App\Models\syaratamyiz;
use App\Http\Requests\StoresyaratamyizRequest;
use App\Http\Requests\UpdatesyaratamyizRequest;

class SyaratamyizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = FacadesDB::table('syaratamyizs')->get();
        $data = [
            'items' => $items
        ];
        return view('category.admin.basis.snk.syaratamyiz', $data);
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
     * @param  \App\Http\Requests\StoresyaratamyizRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'snk_tamyiz' => 'required',
        ]);
        // dd($request->all());
        $insert =  syaratamyiz::create([
            'snk_tamyiz' => $request->snk_tamyiz
        ]);
        return redirect(url('/syaratHaid'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\syaratamyiz  $syaratamyiz
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = syaratamyiz::find($id);
        return view('category.admin.basis.snk.syaratamyiz', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\syaratamyiz  $syaratamyiz
     * @return \Illuminate\Http\Response
     */
    public function edit(syaratamyiz $syaratamyiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesyaratamyizRequest  $request
     * @param  \App\Models\syaratamyiz  $syaratamyiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = syaratamyiz::find($id);
        $post->update($request->all());

        return redirect(url('/syaratamyiz'))->with('Berhasil!', 'Data telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\syaratamyiz  $syaratamyiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = syaratamyiz::find($id);
        $post->delete($request->filled($id));
        return redirect(url('/syaratamyiz'))->with('Berhasil', 'Data telah dihapus.');
    }
}
