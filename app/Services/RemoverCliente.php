<?php

namespace App\Services;

use App\Models\Cliente;

class RemoverCliente {

    public function excluir (int $clienteId) : string {
        $cliente = Cliente::find($clienteId);
        $nomeCliente = $cliente->nome;

        $cliente->delete();

        return $nomeCliente;
    }

}