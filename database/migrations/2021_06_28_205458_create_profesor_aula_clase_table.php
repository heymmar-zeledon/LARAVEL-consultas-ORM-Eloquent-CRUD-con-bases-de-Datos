<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorAulaClaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor_aula_clase', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('profesor_id');
            $table->unsignedBigInteger('aula_id');
            $table->unsignedBigInteger('clase_id');

            $table->foreign('profesor_id')->references('id')->on('profesors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('aula_id')->references('id')->on('aulas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('clase_id')->references('id')->on('clases')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('profesor_aula_clase');
    }
}
