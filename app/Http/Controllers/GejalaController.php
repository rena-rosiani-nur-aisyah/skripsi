<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use App\Models\rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = DB::table('gejalas')->paginate(10);
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
        // dd($request->all());
        $validateData =  $request->validate([
            // 'kode_gejala' => 'required',
            'keterangan' => 'required',
            'image' => 'image|file|max:1024'
        ]);


        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('gejala-images');
        }

        $insert = gejala::create([
            // 'kode_gejala' => $request->kode_gejala,
            'keterangan' => $validateData['keterangan'],
            'image' => $validateData['image'] ?? null
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'keterangan' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('gejala-images');
        }
        gejala::where('id', $id)
            ->update($validatedData);

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
        if ($post->image) {
            Storage::delete($post->image);
        }
        $post->delete();
        return redirect(url('/gejala'))->with('Berhasil,', 'Data telah dihapus');
    }

    public function deleteGejala($id)
    {
        // Menghapus rules yang terkait
        Rule::where('gejala_id', $id)->delete();
        Rule::where('signs_id', $id)->delete();

        // Menghapus gejala
        Gejala::destroy($id);

        return redirect()->back()->with('success', 'Gejala dan rules terkait berhasil dihapus.');
    }
}
