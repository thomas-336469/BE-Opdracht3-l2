<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoertuigInstructeursTable extends Migration
{
    public function up()
    {
        Schema::create('voertuig_instructeurs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voertuig_id');
            $table->unsignedBigInteger('instructeur_id');
            $table->date('datum_toekenning');
            $table->boolean('is_actief')->default(1);
            $table->string('opmerkingen')->nullable()->default(null);
            $table->timestamps(6);

            $table->foreign('voertuig_id')->references('id')->on('voertuigs');
            $table->foreign('instructeur_id')->references('id')->on('instructeurs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('voertuig_instructeurs');
    }
}
