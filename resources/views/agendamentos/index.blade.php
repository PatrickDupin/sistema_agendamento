@extends('templates.layout')

@section('conteudo')
<a href="{{ route('cadastrarCliente') }}" class="btn btn-info mt-3 mb-3"><i class="fas fa-calendar">&nbsp;</i> Agendar</a>
@endsection('conteudo')