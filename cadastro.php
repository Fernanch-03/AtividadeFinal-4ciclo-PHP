<?php
//codigo exemplo de login retirado de: https://mdbootstrap.com/docs/standard/extended/login/
include 'recursos\classes.php';
include 'bootstrap.html';
?>
<br>
<br>

<form action="cadastro.php" method="POST">
    <!-- Name intput -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form2Example1" style="width: 50%;margin-left: 20%;margin-right: 20%;"><h3>Nome</h3></label>
    <input type="name" id="nome" class="form-control" style="width: 50%;margin-left: 20%;margin-right: 20%;" name="nome" />
  </div>
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
  <button type="submit" class="btn btn-primary btn-block mb-4" style="width: 50%;margin-left: 20%;margin-right: 20%;">Cadastrar</button>

  <div class="row mb-4" style="width: 50%;margin-left: 20%;margin-right: 20%;">
    <div class="col d-flex justify-content-center">
      <div class="form-check">
         <a href="login.php"> Clique aqui </a> Para voltar ao login
      </div>
    </div>

</form>

<?php
    class CadastrarUsuario extends VerificarUsuario{
      function __construct($n,$e,$s){//construtor da classes extendida
        $this->nome = $n;
        $this->email = $e;
        $this->senha = $s;
      }
      function registrarUsuario($nome, $email, $senha){//funcao usada para registrar o usuario
          $banco = new PDO("mysql:host=localhost; dbname=quiz","root","");//crio conexao
          $banco->query("INSERT INTO usuario (nm_usuario, nm_email, cd_senha) VALUES('$nome','$email','$senha')");
      }//preparo a inserção do cliente
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {//coloco de uma maneira que estes metodos só serão executados quando uma requição post for chamada
      //recebo os valores dos inputs de nome, email e senha 
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $usuario = new CadastrarUsuario($nome, $email, $senha);//instancio a classe dita acima
      $usuario->registrarUsuario($usuario->nome, $usuario->email, $usuario->senha);//executo o registro da classe
    }
?>