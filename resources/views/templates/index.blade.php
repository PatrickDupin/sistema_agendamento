@extends('templates.layout')


@section('conteudo')
<div class="jumbotron">
    <h2 class="display-4">{{ $titulo ?? '' }}</h2>
</div>
@endsection('conteudo')