<?php

namespace App\Http\Controllers;

use App\Models\warna;
use App\Http\Requests\StorewarnaRequest;
use App\Http\Requests\UpdatewarnaRequest;
use Illuminate\Http\Request;
use DB;

class WarnaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = DB::table('warnas')->get();

        $data = [
            'list' => $list
        ];

        return view('category.warna', $data);
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
     * @param  \App\Http\Requests\StorewarnaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedata['image'] = $request->file('image')->store('warna');
        }

        $insert = warna::create([
            'name' => $request->name,
            'image' => $request->image
        ]);
        return redirect(url('/warna'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = warna::find($id);
        return view('partials.edit.editwarna', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function edit(warna $warna)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatewarnaRequest  $request
     * @param  \App\Models\warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = warna::find($id);
        $post->update($request->all());
        return redirect(url('/warna'))->with('Berhasil!', 'Data telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\warna  $warna
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $post = warna::find($id);
        $post->delete($request->filled($id));
        return redirect(url('/warna'))->with('Berhasil', 'Data telah dihapus.');
    }
}
