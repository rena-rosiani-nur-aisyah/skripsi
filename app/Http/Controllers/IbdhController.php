<?php

namespace App\Http\Controllers;

use App\Models\Ibdh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIbdhRequest;
use App\Http\Requests\UpdateIbdhRequest;
use App\Models\post;

class IbdhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('ibdhs')->get();
        // dd($items);
        $data = [
            'items' => $items
        ];
        return view('category.ibdh', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $list = post::get();
    //     $data = [
    //         'items' => $list
    //     ];
    //     return view('partials.tambah.tibdh', $data);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreIbdhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'jenisDarah' => 'required',
            'wajib' => 'required',
            'mubah' => 'required',
            'haram' => 'required'
        ]);
        $insert = Ibdh::create([
            'jenisDarah' => $request->jenisDarah,
            'wajib' => $request->wajib,
            'mubah' => $request->mubah,
            'haram' => $request->haram
        ]);
        return redirect(url('/ibdh'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ibdh  $ibdh
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Ibdh::find($id);
        return view('partials.edit.eibadah', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ibdh  $ibdh
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     // $post = Ibdh::find($id);
    //     // $data = [
    //     //     'post' => $post
    //     // ];
    //     // return view('partials.edit.eibadah', $data);
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIbdhRequest  $request
     * @param  \App\Models\Ibdh  $ibdh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Ibdh::find($id);
        $post->update($request->all());
        return redirect(url('/ibdh'))->with('Berhasil!', 'Data telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ibdh  $ibdh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Ibdh::find($id);
        $post->delete();
        return redirect(url('/ibdh'))->with('Berhasil', 'Data telah dihapus!');
    }
}
