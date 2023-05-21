<?php

namespace App\Http\Controllers;

use DB;
use App\Models\warna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StorewarnaRequest;
use App\Http\Requests\UpdatewarnaRequest;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Storage;

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

        return view('category.admin.basis.warna', $data);
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
            'image' => 'image|file|max:2048'
        ]);

        $findEvent = warna::create([
            'name' => $request->name,
            'image' => $request->image
        ]);

        $validatedata = $request->image;
        if (!empty($validatedata)) {
            $image = time() . '.' . $request->image->extension();
            $image = $image;
            $findEvent_folder = $request->image->storeAs('', $image);
            $findEvent->image = $image;
        }


        $findEvent->save();
        return redirect()->route('warna')->with('success', 'Successfully Update event');
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
        return view('category.admin.basis.edit.editwarna', compact('post'));
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
        $warna = warna::find($id);

        // Jika gambar ada, simpan gambar
        if (!empty($validatedata)) {
            $image = time() . '.' . $request->image->extension();
            $image = $image;
            $findEvent_folder = $request->image->storeAs('', $image);
            $warna->image = $image;
        }

        // Jika gambar tidak ada, pastikan nama tidak kosong sebelum melakukan pembaruan
        if ($request->filled('name')) {
            $warna->name = $request->input('name');
        }

        $warna->save();

        //return redirect()->back()->with('success', 'User updated successfully!');

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
