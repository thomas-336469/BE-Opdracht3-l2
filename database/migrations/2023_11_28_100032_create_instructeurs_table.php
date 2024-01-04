<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructeursTable extends Migration
{
    public function up()
    {
        Schema::create('instructeurs', function (Blueprint $table) {
            $table->id();
            $table->string('voornaam');
            $table->string('tussenvoegsel');
            $table->string('achternaam');
            $table->string('mobiel');
            $table->date('datum_in_dienst');
            $table->string('aantal_sterren');
            $table->boolean('is_actief')->default(1);
            $table->string('opmerkingen')->nullable()->default(null);
            $table->timestamps(6);
        });
    }

    public function down()
    {
        Schema::dropIfExists('instructeurs');
    }
}
