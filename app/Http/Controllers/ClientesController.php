<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller {
    public function index () {
        return view('clientes.index');
    }

    public function cadastrar () {
        return view('clientes.cadastro');
    }
}

