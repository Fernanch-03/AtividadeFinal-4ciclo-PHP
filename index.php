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
  ?>
    <h1 style="text-align: center; color: darkcyan;">Bem vindo ao Quiz Hub</h1>
    <h1 style="text-align: center; color: darkcyan;">Aqui você encontra todo o tipo de quiz</h1>
    <br>
    <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <div class="form-check">
        <img src="img/php.jfif" class="img-fluid" alt="php">
        <img src="img/matematica.jfif" class="img-fluid" alt="matematica">
        <img src="img/geografia.jfif" class="img-fluid" alt="geografia"> 
      </div>
    </div>
    <br>
    <br>
    <form action="index.php" method="POST">
    <label class="form-label" for="form2Example1" style="width: 50%;margin-left: 25%;margin-right: 25%; color: darkcyan;">
    <h3>Escolha qual quiz voce deseja realizar: 
      <br>1- Php
      <br>2- Matematica
      <br>3- Geografia</h3>
    </label>
        <input type="number" id="teste" class="form-control" style="width: 30%;margin-left: 35%;margin-right: 35%;" name="teste"/><br>
        <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 30%;margin-left: 35%;margin-right: 35%;">Começar o Quiz</button>
      </form>
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $cookieName = "teste";
        $cookieValue = $_POST['teste'];
        $expiration = time() + (100000* 30);
        //preparo os dados do cookie
        setcookie($cookieName, '', $expiration);//deleto o cookie se existir
        setcookie($cookieName, $cookieValue, $expiration);//crio o cookie sobre qual é o teste
        header('Location: quiz.php');//redireciono o usuário para realizar o quiz
      }
      ?>

  </body>
  <style>
    img{

        margin-left: 5px;
        margin-right: 5px;
        width: 200px;
        height: 200px;
    }
  </style>
</html>