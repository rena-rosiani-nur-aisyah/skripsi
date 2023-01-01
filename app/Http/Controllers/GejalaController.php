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

        return view('category.gejala', $data);
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
            'gejala' => 'required',
            'status' => 'required'
        ]);
        $insert = gejala::create([
            'gejala' => $request->gejala,
            'status' => $request->status
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
        return view('partials.edit.editgejala', compact('post'));
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
        $post = gejala::find($id);
        $post->update($request->all());
        return redirect(url('/gejala'))->with('Berhasil!', 'Data telah diubah.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = gejala::find($id);
        $post->delete();
        return redirect(url('/gejala'))->with('Berhasil,', 'Data telah dihapus');
    }
}
