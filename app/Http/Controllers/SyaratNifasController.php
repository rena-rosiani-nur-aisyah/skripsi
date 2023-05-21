<?php

namespace App\Http\Controllers;

use App\Models\SyaratNifas;
use DB;
// use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSyaratNifasRequest;
use App\Http\Requests\UpdateSyaratNifasRequest;

class SyaratNifasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('syarat_nifas')->get();
        $data = [
            'items' => $items
        ];
        return view('category.admin.basis.snk.syaratNifas', $data);
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
     * @param  \App\Http\Requests\StoreSyaratNifasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'snk_nifas' => 'required',
        ]);
        $insert =  SyaratNifas::create([
            'snk_darah' => $request->snk_darah,
        ]);
        return redirect(url('/syaratNifas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SyaratNifas  $syaratNifas
     * @return \Illuminate\Http\Response
     */
    public function show(SyaratNifas $syaratNifas, $id)
    {
        $post = syaratNifas::find($id);
        return view('category.admin.basis.edit.esyaratNifas', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SyaratNifas  $syaratNifas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = SyaratNifas::find($id);
        $data = [
            'post' => $post
        ];
        return view('category.admin.basis.edit.esyaratNifas', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSyaratNifasRequest  $request
     * @param  \App\Models\SyaratNifas  $syaratNifas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update = SyaratNifas::where('id', $request->id);

        $update->update([
            'jenis_darah' => $request->jenis_darah,
            'snk_nifas' => $request->snk_nifas,
        ]);
        return redirect(url('/syaratNifas'))->with('Berhasil,', 'Data telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SyaratNifas  $syaratNifas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = SyaratNifas::find($id);
        $post->delete();
        return redirect(url('/syaratNifas'))->with('Berhasil,', 'Data telah dihapus');
    }
}
