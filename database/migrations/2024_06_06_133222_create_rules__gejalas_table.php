<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesGejalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules__gejalas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rules_id');
            $table->foreignId('gejala_id');
            // $table->primary(['rules_id', 'gejala_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules__gejalas');
    }
}
