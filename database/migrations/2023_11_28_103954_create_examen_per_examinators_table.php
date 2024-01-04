<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenPerExaminatorsTable extends Migration
{
    public function up()
    {
        Schema::create('examen_per_examinators', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('examen_id');
            $table->unsignedBigInteger('examinator_id');
            $table->timestamps(6);

            $table->foreign('examen_id')->references('id')->on('examens');
            $table->foreign('examinator_id')->references('id')->on('examinators');
        });
    }

    public function down()
    {
        Schema::dropIfExists('examen_per_examinators');
    }
}
