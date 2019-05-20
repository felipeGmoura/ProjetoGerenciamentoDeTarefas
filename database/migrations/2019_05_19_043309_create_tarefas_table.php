<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarefasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->string('privacidade');
            $table->string('descricao');
            $table->string('status');
            $table->datetime('data_conclusao');
            $table->bigInteger('usuario_id')->unsigned()->nullable();
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->bigInteger('tipotarefa_id')->unsigned()->nullable();
            $table->foreign('tipotarefa_id')->references('id')->on('tipo_tarefas');
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
        Schema::dropIfExists('tarefas');
    }
}
