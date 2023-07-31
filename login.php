<?php
//codigo exemplo de login retirado de: https://mdbootstrap.com/docs/standard/extended/login/
include 'bootstrap.html';
include 'recursos\classes.php';

?>
<!--Pagina de Login-->
<form action="login.php" method="POST">
   <!-- Email input -->
   <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1" style="width: 50%;margin-left: 20%;margin-right: 20%;"><h3>Email</h3></label>
    <input type="email" id="email" class="form-control" style="width: 50%;margin-left: 20%;margin-right: 20%;" name="email"/>
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example2" style="width: 50%;margin-left: 20%;margin-right: 20%;"><h3>Senha</h3></label>
    <input type="password" id="senha" class="form-control" style="width: 50%;margin-left: 20%;margin-right: 20%;" name="senha"/>
  </div>
  
  <!-- Submit button -->

  <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 50%;margin-left: 20%;margin-right: 20%;">Fazer Login</button>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-4" style="margin-left: 20%;margin-right: 20%;">
    <div class="col d-flex justify-content-center">
      <div class="form-check">
          Não possui uma conta?<a href="cadastro.php"> Clique aqui </a> Para criar uma
      </div>
    </div>

    
  </div>

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {//espera até o metodo post ser chamado
  //aplica o valor de email e senha nas variaveis
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  $usuario = new VerificarUsuario();//instancia a classe em /recursos/classes.php
  $usuario->verificaUsuario($email, $senha);//executa o comando de verificação 
} 
?>