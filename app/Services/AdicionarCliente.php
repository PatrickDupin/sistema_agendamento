<?php

namespace App\Services;

use App\Models\Cliente;

class AdicionarCliente {

    public function incluir (string $nome, string $telefone, string $email) {
        $cliente = Cliente::create([
            'nome' => $nome,
            'telefone' => $telefone,
            'email' => $email
        ]);

        if ($cliente) {
            return $cliente;
        }
    }

}