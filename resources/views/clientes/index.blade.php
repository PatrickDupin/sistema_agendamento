@extends('templates.layout')

@section('conteudo')
<a href="{{ route('cadastrarCliente') }}" class="btn btn-info mt-3 mb-3"><i class="fas fa-plus-circle">&nbsp;</i> Adicionar</a>

<table class="table table-hover table-striped text-center">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">e-mail</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($clientes as $cliente)
    <tr>
      <td>{{ $cliente->nome }}</td>
      <td>{{ $cliente->telefone }}</td>
      <td>{{ $cliente->email }}</td>
      <td>
        <a href="/clientes/apagar/{{ $cliente->id }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection('conteudo')