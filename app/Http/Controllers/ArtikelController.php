<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use function PHPUnit\Framework\directoryExists;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('artikel')->get();
        $data = [
            'items' => $items
        ];
        return view('artikel.artikelAdmin', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.tambahArtikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('image-Artikel');
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image-Artikel');
        }

        artikel::create($validatedData);

        return redirect('/Dashboard/Artikel')->with('success', 'Artikel baru sudah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = artikel::find($id);
        return view('artikel.DetailArtikel', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = artikel::find($id);
        return view('artikel.editArtikel', compact('items'));
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
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('image-Artikel');
        }
        artikel::where('id', $id)
            ->update($validatedData);
        return redirect('/Dashboard/Artikel')->with('success', 'Data telah di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request = artikel::findOrFail($id);
        if ($request->image) {
            Storage::delete($request->image);
        }
        artikel::destroy($id);
        return redirect('/Dashboard/Artikel')->with('success', 'Data telah dihapus');
    }
}
