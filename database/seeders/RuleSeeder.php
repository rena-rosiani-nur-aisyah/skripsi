<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\gejala;
use App\Models\post;
use App\Models\rule as ModelsRules;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsRules::created([
            'posts_id' =>  post::where('id', 1)->first()->id,
            'gejala_id' => gejala::where('id', 1)->first()->id
        ]);
        ModelsRules::created([
            'posts_id' =>  post::where('id', 1)->first()->id,
            'gejala_id' => gejala::where('id', 2)->first()->id
        ]);
        ModelsRules::created([
            'posts_id' => post::where('id', 1)->first()->id,
            'gejala_id' => gejala::where('id', 3)->first()->id
        ]);
    }
}
