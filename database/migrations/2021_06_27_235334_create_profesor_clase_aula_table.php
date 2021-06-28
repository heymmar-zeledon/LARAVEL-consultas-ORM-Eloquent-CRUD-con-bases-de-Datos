<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesorClaseAulaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor_clase_aula', function (Blueprint $table) {
            $table->string('id_profesor',20)->unique();
            $table->string('id_clase',20)->unique();
            $table->unsignedBigInteger('id_aula',20);
            $table->foreign('id_profesor')->references('id')->on('profesors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_clase')->references('id')->on('clases')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_aula')->references('id')->on('aulas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('profesor_clase_aula');
    }
}
