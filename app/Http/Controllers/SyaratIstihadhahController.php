<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use DB;
use App\Models\syaratIstihadhah;
use App\Http\Requests\StoresyaratIstihadhahRequest;
use App\Http\Requests\UpdatesyaratIstihadhahRequest;

class SyaratIstihadhahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = FacadesDB::table('syarat_istihadhahs')->get();
        $data = [
            'items' => $items
        ];
        return view('category.admin.basis.snk.syaratIstihadhah', $data);
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
     * @param  \App\Http\Requests\StoresyaratIstihadhahRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'snk_istihadhah' => 'required'
        ]);
        // dd($request->all());
        $insert =  syaratIstihadhah::create([
            'snk_istihadhah' => $request->snk_istihadhah,
        ]);
        return redirect(url('/syaratIstihadhah'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\syaratIstihadhah  $syaratIstihadhah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = syaratIstihadhah::find($id);
        return view('category.admin.basis.edit.esyaratIstihadhah', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\syaratIstihadhah  $syaratIstihadhah
     * @return \Illuminate\Http\Response
     */
    public function edit(syaratIstihadhah $syaratIstihadhah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesyaratIstihadhahRequest  $request
     * @param  \App\Models\syaratIstihadhah  $syaratIstihadhah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = syaratIstihadhah::find($id);
        $post->update($request->all());

        return redirect(url('/syaratIstihadhah'))->with('Berhasil!', 'Data telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\syaratIstihadhah  $syaratIstihadhah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = syaratIstihadhah::find($id);
        $post->delete($request->filled($id));
        return redirect(url('/syaratIstihadhah'))->with('Berhasil', 'Data telah dihapus.');
    }
}
