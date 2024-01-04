<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExaminatorsTable extends Migration
{
    public function up()
    {
        Schema::create('examinators', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam');
            $table->string('tussenvoegsel')->nullable();
            $table->string('achternaam');
            $table->string('mobiel');
            $table->timestamps(6);
        });
    }

    public function down()
    {
        Schema::dropIfExists('examinators');
    }
}
