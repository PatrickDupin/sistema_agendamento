<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Services\AdicionarCliente;
use Illuminate\Http\Request;

class ClientesController extends Controller {
    public function index () {
        return view('clientes.index');
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
 
        return redirect()->route('cadastrarCliente');
    }
}

