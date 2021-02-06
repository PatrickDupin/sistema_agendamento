<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class AgendamentosController extends Controller {
    public function index () {
        $clientes = Cliente::query()
                ->orderBy('nome')
                ->get();

        return view('agendamentos.index', compact('clientes'));
    }

    public function agendar (Request $request) {
        var_dump($request);exit;
    }
}