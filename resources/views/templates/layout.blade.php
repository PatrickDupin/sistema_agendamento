<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barbearia do Josias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a9fb44c92d.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('images/icon-barbearia-sm.jpeg') }}" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="menu-bar" class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/principal"> <i class="fas fa-home">&nbsp;</i> Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/clientes"> <i class="fas fa-user">&nbsp;</i> Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/agendamentos"> <i class="fas fa-calendar-alt">&nbsp;</i> Agendamentos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/relatorios"> <i class="fas fa-clipboard-list">&nbsp;</i> Relatórios</a>
            </li>
          </ul>
        </div>
    </div>
  </nav>

  <main class="container">
    <div class="py-5"></div>
    @yield('conteudo')
  </main>
  <footer>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</html>