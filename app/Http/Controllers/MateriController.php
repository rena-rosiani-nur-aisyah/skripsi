<?php

namespace App\Http\Controllers;

use App\Models\materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('materis')->get();
        // dd($items);
        $data = [
            'items' => $items
        ];
        return view('category.materi', $data);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insert = materi::create([
            'jenis_darah' => $request->jenis_darah,
            'keterangan' => $request->keterangan
        ]);
        return redirect(url('/materi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = materi::find($id);
        return view('partials.edit.emateri', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = materi::find($id);
        $data = [
            'post' => $post
        ];
        return view('partials.edit.emateri', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = materi::where('id', $request->id);
        $post->update([
            'jenis_darah' => $request->jenis_darah,
            'keterangan' => $request->keterangan
        ]);
        return redirect(url('/materi'))->with('Berhasil,', 'Data telah dirubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = materi::find($id);
        $post->delete();
        return redirect(url('/materi'))->with('Berhasil,', 'Data telah dihapus');
    }
}
