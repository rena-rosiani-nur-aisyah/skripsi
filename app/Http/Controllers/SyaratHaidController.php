<?php

namespace App\Http\Controllers;

use App\Models\syaratHaid;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
// use App\Http\Requests\StoresyaratHaidRequest;
// use App\Http\Requests\UpdatesyaratHaidRequest;

class SyaratHaidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = FacadesDB::table('syarat_haids')->get();
        $data = [
            'items' => $items
        ];
        return view('category.admin.basis.snk.syaratHaid', $data);
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
     * @param  \App\Http\Requests\StoresyaratHaidRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'syaratHaid' => 'required',
        ]);
        // dd($request->all());
        $insert =  syaratHaid::create([
            'syaratHaid' => $request->syaratHaid
        ]);
        return redirect(url('/syaratHaid'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\syaratHaid  $syaratHaid
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = syaratHaid::find($id);
        return view('category.admin.basis.snk.syaratHaid', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\syaratHaid  $syaratHaid
     * @return \Illuminate\Http\Response
     */
    public function edit(syaratHaid $syaratHaid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesyaratHaidRequest  $request
     * @param  \App\Models\syaratHaid  $syaratHaid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = syaratHaid::find($id);
        $post->update($request->all());

        return redirect(url('/syaratHaid'))->with('Berhasil!', 'Data telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\syaratHaid  $syaratHaid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = syaratHaid::find($id);
        $post->delete($request->filled($id));
        return redirect(url('/syaratHaid'))->with('Berhasil', 'Data telah dihapus.');
    }
}
