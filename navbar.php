<?php
include 'bootstrap.html';
//retirado de: https://getbootstrap.com.br/docs/4.1/components/navbar/?
?>
<!-- Navbar, que será um menu que aparecerá em várias paginas -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: antiquewhite;">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="index.php">Página Inicial</a>
        <a class="nav-item nav-link active" href="resultados.php">Rankings</a>
        <?php if (!isset($_COOKIE['usuario'])) {echo'<a class="nav-item nav-link" href="login.php">Login</a>';}?>
        <a class="nav-item nav-link" ><?php 
        if (isset($_COOKIE['usuario'])) {//verifica se o cookie existe
          $cookieValue = $_COOKIE['usuario'];//aplica o valor do cookie a essa variavel
          echo  $cookieValue;//exibe o valor do cookie (que é o usuario)
        } else {
          echo "não logado";//mostra não logado caso o usuário não esteja logado
        }?></a>
        <?php if (isset($_COOKIE['usuario'])) {
        echo'<a href="deslogar.php"><button type="button" class="btn btn-danger">Deslogar</button></a>';}//botão para terminar a sessão?>
      </div>
    </div>
  </nav>