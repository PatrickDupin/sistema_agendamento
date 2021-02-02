@extends('templates.layout')

@section('conteudo')
<a href="{{ route('cadastrarCliente') }}" class="btn btn-info mt-3 mb-3"><i class="fas fa-plus-circle">&nbsp;</i> Adicionar</a>
<div>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">teste 1</li>
        <li class="list-group-item d-flex justify-content-between align-items-center">teste 2</li>
        <li class="list-group-item d-flex justify-content-between align-items-center">teste 3</li>
        <li class="list-group-item d-flex justify-content-between align-items-center">teste 4</li>
        <li class="list-group-item d-flex justify-content-between align-items-center">teste 5</li>
    </ul>
</div>
@endsection('conteudo')