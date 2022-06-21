<?php

namespace App\Http\Controllers;

use App\Models\diagnosis;
use App\Http\Requests\StorediagnosisRequest;
use App\Http\Requests\UpdatediagnosisRequest;
use Illuminate\Support\Facades\DB;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('diagnoses')
            ->join('posts', 'diagnoses.jenis_id', '=', 'posts.id')
            ->join('questions', 'diagnoses.question_id', '=', 'questions.id')
            ->get();
        // dd($items);
        $data = [
            'items' => $items
        ];
        return view('category.diagnos', $data);
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
     * @param  \App\Http\Requests\StorediagnosisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorediagnosisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function show(diagnosis $diagnosis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function edit(diagnosis $diagnosis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatediagnosisRequest  $request
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatediagnosisRequest $request, diagnosis $diagnosis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\diagnosis  $diagnosis
     * @return \Illuminate\Http\Response
     */
    public function destroy(diagnosis $diagnosis)
    {
        //
    }
}
