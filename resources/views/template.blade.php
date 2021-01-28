<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/app.js"></script>
    <title>Barbearia do Josias</title>
</head>
<body>
    <div id="app">
        @{{ message }}
    </div>
</body>
</html>

<script>
  var app = new Vue({
      el: '#app',
      data: {
        message: 'Josias\' Barber!'
      }
    })
</script>