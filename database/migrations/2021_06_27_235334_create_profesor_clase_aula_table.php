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
            $table->string('c_codclase');
            $table->string('p_idprofesor');
            $table->bigInteger('a_idaula')->unsigned();
            $table->timestamps();
            
            $table->foreign('c_codclase')->references('codclase')->on('clases')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('p_idprofesor')->references('id')->on('profesors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('a_idaula')->references('id')->on('aulas')->onDelete('cascade')->onUpdate('cascade');
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
