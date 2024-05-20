<?php

namespace App\Http\Controllers;

use App\Models\gejala;
use App\Models\post;
use App\Models\rule;
use Illuminate\Http\Request;
use DB;
use forwardChaining;
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

    // public function create()
    // {
    //     return view('partials.tjenis');
    // }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'keterangan' => 'required',
        ]);
        // dd($request->all());
        $insert =  post::create([
            'name' => $request->name,
            'keterangan' => $request->keterangan,
        ]);
        return redirect(url('/jenis'));
    }

    public function destroy(Request $request, $id)
    {
        $post = Post::find($id);
        $post->delete($request->filled($id));
        return redirect(url('/jenis'))->with('Berhasil', 'Data telah dihapus.');
    }

    public function show($id)
    {

        $post = Post::find($id);
        return view('category.admin.penyakit.create', compact('post'));
    }

    public function update(Request $request,  $id)
    {
        $post = Post::find($id);
        $post->update($request->all());

        return redirect(url('/jenis'))->with('Berhasil!', 'Data telah diubah.');
    }

    public function diagnosis(Request $request)
    {
        $gejala = $request->gejala;

        $forwardChaining = new forwardChaining(new rule, new gejala());
        $matchRules = $forwardChaining->forwardThis($gejala);

        // Do something with the matched rules, such as returning the most likely disease.
    }
}
