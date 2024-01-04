<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamensTable extends Migration
{
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->string('rijschool');
            $table->string('stad');
            $table->string('rijbewijs_categorie');
            $table->date('datum');
            $table->string('uitslag');
            $table->timestamps(6);
        });
    }

    public function down()
    {
        Schema::dropIfExists('examens');
    }
}
