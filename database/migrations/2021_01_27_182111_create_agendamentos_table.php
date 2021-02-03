<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->integer('servico_id');
            $table->integer('profissional_id');

            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('servico_id')->references('id')->on('servicos');
            $table->foreign('profissional_id')->references('id')->on('profissionais');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('agendamentos');
    }
}
