<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoertuigsTable extends Migration
{
    public function up()
    {
        Schema::create('voertuigs', function (Blueprint $table) {
            $table->id();
            $table->string('kenteken');
            $table->string('type');
            $table->date('bouwjaar');
            $table->string('brandstof');
            $table->unsignedBigInteger('type_voertuig_id');
            $table->boolean('is_actief')->default(1);
            $table->string('opmerkingen')->nullable()->default(null);
            $table->timestamps(6);

            $table->foreign('type_voertuig_id')->references('id')->on('type_voertuigs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('voertuigs');
    }
}
