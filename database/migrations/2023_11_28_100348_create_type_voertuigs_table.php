<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeVoertuigsTable extends Migration
{
    public function up()
    {
        Schema::create('type_voertuigs', function (Blueprint $table) {
            $table->id();
            $table->string('type_voertuig');
            $table->string('rijbewijscategorie');
            $table->boolean('is_actief')->default(1);
            $table->string('opmerkingen')->nullable()->default(null);
            $table->timestamps(6);
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_voertuigs');
    }
}
