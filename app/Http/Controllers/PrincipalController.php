<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller {
    public function index () {
        $titulo = 'Página Inicial';

        return view('templates.index', compact( 'titulo', 'titulo' ) );
    }
}
