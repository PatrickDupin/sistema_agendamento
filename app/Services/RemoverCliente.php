<?php

namespace App\Services;

use App\Models\Cliente;

class RemoverCliente {

    public function excluir (int $clienteId) {
        $cliente = Cliente::find($clienteId);
        $nomeCliente = $cliente->nome;

        $cliente->delete();

        return $nomeCliente;
    }

}