<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = DB::table('gejalas')->get();
        $data = [
            'items' => $items
        ];

        return view('category.admin.gejala.gejala', $data);
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
        $validateData = $request->validate([
            'kode_gejala' => 'required',
            'gejala' => 'required'
        ]);
        $insert = gejala::create([
            'kode_gejala' => $request->kode_gejala,
            'gejala' => $request->gejala
        ]);
        return redirect(url('/gejala'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = gejala::find($id);
        return view('category.admin.gejala.editgejala', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     $post = gejala::find($id);
    //     $data = [
    //         'post' => $post
    //     ];
    //     return view('partials.edit.editgejala', $data);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'gejala' => 'required'
        ]);
        $post = gejala::where('id', $request->id);
        $post->update([
            'kode_gejala' => $request->kode_gejala,
            'gejala' => $request->gejala
        ]);
        return redirect(url('/gejala'))->with('Berhasil!', 'Data telah diubah.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // gejala::destroy($gejala->kode_gejala);
        $post = gejala::find($id);
        $post->delete();
        return redirect(url('/gejala'))->with('Berhasil,', 'Data telah dihapus');
    }
}
