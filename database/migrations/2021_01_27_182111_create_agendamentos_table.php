<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos_tbl', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreign('cliente_id')->references('id')->on('clientes_tbl');
            $table->foreign('servico_id')->references('id')->on('servicos_tbl');
            $table->foreign('profissional_id')->references('id')->on('profissionais_tbl');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendamentos_tbl');
    }
}
