@extends('templates.layout')

@section('conteudo')
<h1>Cadastro</h1>
<form action="" method="post">@csrf
    <div class="row">
        <div class="col col-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-group" id="nome" name="nome" />
        </div>
        <div class="col col-4">
            <label for="dt_nascimento">Data de Nascimento</label>
            <input type="text" class="form-group" id="dt_nascimento" name="dt_nascimento" />
        </div>
    </div>
    <div class="row">
        <div class="col col-6">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-group" id="telefone" name="telefone" />
        </div>
        <div class="col col-6">
            <label for="email">e-mail</label>
            <input type="text" class="form-group" id="email" name="email" />
        </div>
    </div>

    <button class="btn btn-dark mt-3"> <i class="fas fa-save">&nbsp;</i> Salvar</button>

</form>
@endsection('conteudo')