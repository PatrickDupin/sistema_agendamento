<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Services\AdicionarCliente;
use App\Services\RemoverCliente;
use Illuminate\Http\Request;

class ClientesController extends Controller {
    public function index (Request $request) {
        $clientes = Cliente::query()
        ->orderBy('nome')
        ->get();

        return view('clientes.index', compact('clientes'));
    }

    public function cadastrar () {
        return view('clientes.cadastro');
    }

    public function gravar (Request $request, AdicionarCliente $adicionarCliente) {
        $cliente = $adicionarCliente->incluir($request->nome, $request->telefone, $request->email);
         
        $request->session()
                    ->flash(
                        'mensagem',
                        "O {$cliente->nome} foi cadastrado com sucesso!"
                    );
 
        return redirect()->route('clientes');
    }

    public function excluir (Request $request, RemoverCliente $removerCliente) {
        $cliente = $removerCliente->excluir($request(id));

        return redirect()->route('clientes');
    }
}

