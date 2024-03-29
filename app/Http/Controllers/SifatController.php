<?php

namespace App\Http\Controllers;

use DB;
use App\Models\sifat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoresifatRequest;
use App\Http\Requests\UpdatesifatRequest;

class SifatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('sifats')->get();
        $data = [
            'items' => $items
        ];
        return view('category.admin.basis.sifat', $data);
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
     * @param  \App\Http\Requests\StoresifatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'warna' => 'required',
            'karakter' => 'required',
            'ciri' => 'required',
            'klasifikasi' => 'required'
        ]);
        $insert =  sifat::create([
            'warna' => $request->warna,
            'karakter' => $request->karakter,
            'ciri' => $request->ciri,
            'klasifikasi' => $request->klasifikasi
        ]);
        return redirect(url('/sifat'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sifat  $sifat
     * @return \Illuminate\Http\Response
     */
    public function show(sifat $sifat, $id)
    {
        $post = sifat::find($id);
        return view('category.admin.basis.edit.editsifat', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sifat  $sifat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = sifat::find($id);
        $data = [
            'post' => $post
        ];
        return view('category.admin.basis.edit.editsifat', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatesifatRequest  $request
     * @param  \App\Models\sifat  $sifat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->all());
        $update = sifat::where('id', $request->id);

        $update->update([
            'warna' => $request->warna,
            'karakter' => $request->karakter,
            'ciri' => $request->ciri,
            'klasifikasi' => $request->klasifikasi
        ]);
        return redirect(url('/sifat'))->with('Berhasil,', 'Data telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sifat  $sifat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = sifat::find($id);
        $post->delete();
        return redirect(url('/sifat'))->with('Berhasil,', 'Data telah dihapus');
    }
}
