<?php

namespace App\Http\Controllers;

// use App\Models\gejala;
use App\Models\post;
use App\Models\rule;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB as FacadesDB;

class PostController extends Controller
{
    public function index()
    {
        $items = FacadesDB::table('posts')->get();
        $data = [
            'items' => $items
        ];
        return view('category.admin.penyakit.jenis-darah', $data);
    }



    public function store(Request $request)
    {
        // dd($request->all());

        $validateData = $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
            'Solusi' => 'required'
        ]);
        $insert =  post::create([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
            'Solusi' => $request->Solusi,
        ]);
        return redirect(url('/jenis'));
    }

    public function destroy(Request $request, $id)
    {
        $post = post::find($id);
        $post->delete($request->filled($id));
        return redirect(url('/jenis'))->with('Berhasil', 'Data telah dihapus.');
    }

    public function show($id)
    {

        $post = post::find($id);
        return view('category.admin.penyakit.create', compact('post'));
    }

    public function update(Request $request,  $id)
    {
        $post = post::find($id);
        $post->update($request->all());

        return redirect(url('/jenis'))->with('Berhasil!', 'Data telah diubah.');
    }

    public function deletePenyakit($id)
    {
        // Menghapus rules yang terkait
        Rule::where('gejala_id', $id)->delete();
        Rule::where('signs_id', $id)->delete();

        // Menghapus penyakit
        post::destroy($id);

        return redirect()->back()->with('success', 'Gejala dan rules terkait berhasil dihapus.');
    }
}
