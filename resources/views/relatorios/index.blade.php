@extends('templates.layout')

@section('conteudo')
<a href="{{ route('agendarCliente') }}" class="btn btn-info mt-3 mb-3"><i class="fas fa-print">&nbsp;</i> Imprimir</a>
@endsection('conteudo')