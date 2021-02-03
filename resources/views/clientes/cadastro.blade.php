@extends('templates.layout')

@section('conteudo')
<h1>Cadastro</h1>
<form action="" method="post">@csrf
    <div class="row pt-4">
        <div class="col">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" />
        </div>
    </div>
    <div class="row pt-4">
        <div class="col col-5">
            <label for="telefone">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" />
        </div>
        <div class="col">
            <label for="email">e-mail</label>
            <input type="text" class="form-control" id="email" name="email" />
        </div>
    </div>

    <div class="row">
        <div class="col">
            <button class="btn btn-dark my-5"> <i class="fas fa-save">&nbsp;</i> Salvar</button>
            <button class="btn btn-secondary my-5"> <i class="fas fa-eraser">&nbsp;</i> Limpar</button>
        </div>    
    </div>

</form>
@endsection('conteudo')