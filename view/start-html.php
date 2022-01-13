<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Notas</title>

</head>
<body>
<?php if(isset($_SESSION['logado'])): ?>
<nav class="navbar navbar-dark bg-dark mb-2">
<a class="navbar-brand" href="/listaNotas">Home</a>

<ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/logout">sair</a>
        </li>
</nav>
<?php endif; ?>
<div class="container">

    <div class="jumbotron">
    <p>Bem vindo:  </p>
        <h2><?php echo $tituloPagina; ?></h2>
    
    </div>
    <?php if(isset($_SESSION['mensagem'])): ?>
      <div class="alert alert-<?= $_SESSION['tipo_mensagem'];?>">
       <?= $_SESSION['mensagem']; ?>
     </div>
    <?php endif; 
        unset($_SESSION['tipo_mensagem']);
        unset($_SESSION['mensagem']);
    ?>