@extends('templates.layout')

@section('conteudo')
<h1>Agendamento</h1>
<form action="" method="post">@csrf
    <div class="row pt-4">
        <div class="col">
            <label for="cliente">Cliente</label>
            <select name="cliente" id="cliente" class="form-control">
                <option value="" disabled="disabled" selected="selected">Selecione um cliente</option>
                @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col">
            <label for="profissional">Profissional</label>
            <select name="profissional" id="profissional" class="form-control">
                <option value="" disabled="disabled" selected="selected">Selecione um profissional</option>
            </select>
        </div>
        <div class="col">
            <label for="servico">Serviço</label>
            <select name="servico" id="servico" class="form-control">
                <option value="" disabled="disabled" selected="selected">Selecione um serviço</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col">
        <a href="{{ route('agendarCliente') }}" class="btn btn-info mt-3 mb-3"><i class="fas fa-calendar">&nbsp;</i> Agendar</a>
        </div>
    </div>
</form>
@endsection('conteudo')