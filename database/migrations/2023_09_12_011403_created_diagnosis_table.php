<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatedDiagnosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->onDelete('cascade');
            $table->foreignId('user_id')->onDelete('cascade');
            $table->unsignedBigInteger('gejala_id')->references('id')->on('gejala_id')->onDelete('cascade');
            $table->enum('jawaban', ['ya', 'tidak'])->default('ya');
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
        //
    }
}
