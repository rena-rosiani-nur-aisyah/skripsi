<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGejalasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gejalas', function (Blueprint $table) {
            $table->id('id');
            // $table->string('kode_gejala')->unique();
            $table->text('gejala');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }
    // protected $primaryKey = 'idgejala';

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gejalas');
    }
}
