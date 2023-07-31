<?php 
//parte do código onde classes que serão usadas pormais de uma pagina são armazenadas


class VerificarUsuario{
    
    public $nome, $email, $senha,$dados;//nomes das variaveis das classes

    function verUsuario(){//função para testes
        $banco = new PDO("mysql:host=localhost; dbname=quiz","root","");//crio conexão
        $dados = $banco->query("SELECT * FROM usuario");//executo o comando para selecinar todos os usuarios
        $user = $dados->fetchAll(PDO::FETCH_ASSOC);//do fetch para poder usar esses dados
        foreach($user as $u){//uso foreach para acessar esses dados
            echo $u['cd_usuario'];//mostro o codigo do usuario
        }
    }
    function verificaUsuario($email, $senha){//classes para a verificação se o usuario existe no sistema
        $banco = new PDO("mysql:host=localhost; dbname=quiz","root","");//crio conexão 
        $this->dados = $banco->query("SELECT * FROM usuario WHERE nm_email = '".$email."' AND cd_senha = '".$senha."';");//Crio o selet para verificar se o usuario existe
        $user = $this->dados->fetchAll(PDO::FETCH_ASSOC);//do fetch para poder usar esses dados
        if(sizeof($user)== 0){//verifico se aquela requisição retornou algo, se não, cai nessa parte d codigo
            header('Location: http://localhost/LP4/Atividade%20Semestral/login.php');//coloo o usuario de volta para esta pagina
        }
        else{//caso a requisição reorne algo
            foreach($user as $u){//coloco os dados de uma maneira que eu consiga usar eles
                $cookieName = "usuario";
                $cookieValue = $u['nm_usuario'];
                $expiration = time() + (86400 * 30);
                //os 3 codigos acima são usados para preparar valores para um cookie

                setcookie($cookieName, $cookieValue, $expiration);//aqui é onde eu crio o cookie
            header('Location: http://localhost/LP4/Atividade%20Semestral/index.php');//redireciono o usuario para o index
        }
        }
        
    }

}
?>