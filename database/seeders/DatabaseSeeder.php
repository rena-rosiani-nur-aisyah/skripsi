<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\post;
// use App\Models\diagnosis;
// use App\Models\gejala;
// use App\Models\rule;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        post::create([]);

        $penyakit = new post();
        // $gejala = new gejala();
        // $diagnosis = new diagnosis();
        // $rules = new rule();

        post::insert($penyakit->fillTable());
        // gejala::insert($gejala->fillTable());
        // diagnosis::insert($diagnosis->fillTable());
        // rule::insert($rules->fillTable());
    }
}
