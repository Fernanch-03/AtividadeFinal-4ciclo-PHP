<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title >Pagina Inicial</title>
  </head>
  <body style="background-color: bisque;">
  <?php
  include 'navbar.php';
  include 'bootstrap.html';
  include 'recursos\classes.php';
  ?>
    <br>
    <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <div class="form-check">
        <?php
        $usuario = new VerificarUsuario();//instancio o verificarUsuario
        $usuario->verificaPontuacao();//Vejo a pontuação de todos os usuários
        ?>
      </div>
    </div>
    <br>
    <br>
    
     

  </body>

</html>