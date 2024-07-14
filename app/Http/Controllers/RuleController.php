<?php

namespace App\Http\Controllers;

use App\Models\rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreruleRequest;
use App\Http\Requests\UpdateruleRequest;
use App\Models\gejala;
use App\Models\post;
use PHPUnit\Framework\Constraint\Operator;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = rule::all();

        $data = [
            'items' => $items
        ];
        return view('category.admin.diagnosis.rule.rule', $data);
    }

    public function create()
    {
        return view('category.admin.diagnosis.rule.tambahRules', [
            'gejalas' => gejala::all(),
            'signs' => gejala::all(),
            'penyakit' => post::all()
        ]);
    }
    // $jenisDarah = post::all();

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'post_id' => 'required',
            'gejala_id' => 'required',
            'signs_id' => 'required',
            'operator' => 'required|in:AND,OR',
            'value' => 'required|in:ya,tidak'
        ]);

        rule::create($validatedData);
        return redirect('/rules')->with('success', 'Aturan baru sudah ditambahkan!');
    }


    public function show(rule $rule)
    {
        //
    }

    public function edit(rule $rule)
    {
        return view('category.admin.diagnosis.rule.editRules', [
            'rule' => $rule,
            'gejalas' => gejala::all(),
            'signs' => gejala::all(),
            'penyakit' => post::all()
        ]);
    }

    public function update(UpdateruleRequest $request, rule $rule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy(rule $rule)
    {
        rule::destroy($rule->id);
        return redirect('/rules')->with('success', 'Data aturan terhapus!');
    }
}
