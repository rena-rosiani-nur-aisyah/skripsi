<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorequestionRequest;
use App\Http\Requests\UpdatequestionRequest;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('questions')->paginate(10);
        $data = [
            'items' => $items
        ];
        return view('category.admin.diagnosis.rule.rule', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.admin.diagnosis.rule.tambahRules');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorequestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        // return $request->file('image')->store('gambar-question');
        $validatedData = $request->validate([
            'pertanyaan' => 'required',
            'is_yes' => 'required',
            'is_no' => 'required',
            'image' => 'image|file|max:1024'
        ]);
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('gambar-question');
        }
        question::create($validatedData);
        return redirect('/rules')->with('success', 'Aturan baru sudah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $items = question::find($id);
        return view('category.admin.gejala.editgejala', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = question::find($id);
        return view('category.admin.diagnosis.rule.editRules', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatequestionRequest  $request
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'pertanyaan' => 'required',
            'is_yes' => 'required',
            'is_no' => 'required',
            'image' => 'image|file|max:1024'
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('gambar-question');
        }
        question::where('id', $id)
            ->update($validatedData);

        return redirect(url('/rules'))->with('Berhasil!', 'Data telah diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $request = question::findOrFail($id);
        if ($request->image) {
            Storage::delete($request->image);
        }
        question::destroy($id);
        return redirect('/rules')->with('success', 'Data telah dihapus');
    }
}
