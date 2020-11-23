<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigInteger('matricula')->unique();
            $table->string('nome');
            $table->boolean('situacao');
            $table->bigInteger('curso');
            $table->string('turma');
            $table->date('data_matricula');
            $table->integer('cep');
            $table->string('rua');
            $table->string('cidade');
            $table->string('estado');
            $table->string('bairro');
            $table->integer('numero');
            $table->string('complemento')->nullable();
            $table->string('foto')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
}
