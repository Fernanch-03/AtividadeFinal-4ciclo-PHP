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
if (isset($_COOKIE['usuario'])) {//verifico se o usuário possui um login ativo
$quiz = $_COOKIE['teste'];//pego os dados de qual teste mostrar
$contagem = 0;//variavel para a contagem da pontuação
    switch ($quiz) {//um switch case para verificar qual quiz usae
        case 1://caso seja 1 (quiz de php)
            ?>
            <!--O quiz em si -->
            <form method="POST" action="quiz.php">
                <h2>Em php, qual é o construtor de linguagem que exibe um texto html na tela?</h2>
                    <input type="radio" name="q1" value="o1"> Alert<br>
                    <input type="radio" name="q1" value="o2"> Echo<br>
                    <input type="radio" name="q1" value="o3"> Post<br>
                    <input type="radio" name="q1" value="o4"> Alert<br>
                    <input type="radio" name="q1" value="o5"> system.out.print<br>
                <br>
                <h2>Para receber uma requisição POST atravéz do php, qual das seguintes linhas de código conseguem 
                    capturar as informações, sem erros?</h2>
                    <input type="radio" name="q2" value="o1"> $var = $_POST['valor'];<br>
                    <input type="radio" name="q2" value="o2"> $var = $POST['valor'];<br>
                    <input type="radio" name="q2" value="o3"> $var = _POST['valor'];<br>
                    <input type="radio" name="q2" value="o4"> $var = POST;<br>
                    <input type="radio" name="q2" value="o5"> $var = $_GET['valor'];<br>
                <br>
                <h2>Em php, o que a função "header" faz?</h2>
                    <input type="radio" name="q3" value="o1"> Adiciona informações adicionais ao elemento HTML "head"<br>
                    <input type="radio" name="q3" value="o2"> Cria uma variavel que pode ser usada em outras páginas<br>
                    <input type="radio" name="q3" value="o3"> Serve para apenas armazenar funções para usalas em outras páginas<br>
                    <input type="radio" name="q3" value="o4"> Cria uma nova página para a exibição de informações<br>
                    <input type="radio" name="q3" value="o5"> Redireciona o usuário para outra página<br>
                <br>
                <h2>Qual destas peças de código abaixo é uma maneira correta de criar um cookie em php?(considere o seguinte
                    valor para as variáveis:$cookieName = "João", $cookieValue = 20, $expiration = time()+400);
                </h2>
                    <input type="radio" name="q4" value="o1"> setcookie($cookieName, $cookieValue, $expiration);<br>
                    <input type="radio" name="q4" value="o2"> setcookie("nome", "Valor", '200');<br>
                    <input type="radio" name="q4" value="o3"> cookie($cookieName, $cookieValue, $expiration);<br>
                    <input type="radio" name="q4" value="o4"> setcookie($cookieName, $expiration, $cookieValue);<br>
                    <input type="radio" name="q4" value="o5"> Nenhuma das anteriores<br>
                <br>
                <h2>o que é o if</h2>
                    <input type="radio" name="q5" value="o1"> O if é uma serie de códigos elaborados, que serve para realizar diversas funções ao mesmo tempo, fazendo com que o seu código rode melhor e mais eficientemente<br>
                    <input type="radio" name="q5" value="o2"> É a estrutura de controle condicional que é usada em toda a linguagem<br>
                    <input type="radio" name="q5" value="o3"> É um switch case mais complicado<br>
                    <input type="radio" name="q5" value="o4"> Não faz nada<br>
                    <input type="radio" name="q5" value="o5"> Não sei, so coloco o if ali, o código roda e eu fico feliz<br>
                <br>
                
                <input type="submit" value="Enviar">
            </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {//espero uma requisição POST
                //recebo os valores do quiz
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2'];
                $q3 = $_POST['q3'];
                $q4 = $_POST['q4'];
                $q5 = $_POST['q5'];
                //verifico se as espostas estão corretas
                if($q1 == "o2"){
                    $contagem ++;//aumento a contagem caso ele acerte a questão
                }
                if($q2 == "o1"){
                    $contagem ++;
                }
                if($q3 == "o5"){
                    $contagem ++;
                }
                if($q4 == "o1"){
                    $contagem ++;
                }
                if($q5 == "o2"){
                    $contagem ++;
                }
                $usuario = new VerificarUsuario();//instancio a classe
                $usuario->adicionarPontucao($contagem);//adiciono a pontuação ao usuário
                $contagem = 0;//reseto a contagem para 0
            }
        break;
        case 2://utiliza a mesma lógica do case 1
            ?>
                <form method="POST" action="quiz.php">
                    <h2>Quanto é 3+4(5+7)</h2>
                        <input type="radio" name="q1" value="o1"> 51<br>
                        <input type="radio" name="q1" value="o2"> 84<br>
                        <input type="radio" name="q1" value="o3"> 48<br>
                        <input type="radio" name="q1" value="o4"> 81<br>
                        <input type="radio" name="q1" value="o5"> Nenhuma das anteriores<br>
                    <br>
                    <h2>qual/quais são os valores de x na seguinte equação: 2x² + 5x - 3 = 0</h2>
                        <input type="radio" name="q2" value="o1"> 5, 3<br>
                        <input type="radio" name="q2" value="o2"> -5, -3<br>
                        <input type="radio" name="q2" value="o3"> 5, -3<br>
                        <input type="radio" name="q2" value="o4"> 0.5, 3<br>
                        <input type="radio" name="q2" value="o5"> 0.5, -3<br>
                    <br>
                    <h2>quanto é 30+20</h2>
                        <input type="radio" name="q3" value="o1"> 5.0<br>
                        <input type="radio" name="q3" value="o2"> 500<br>
                        <input type="radio" name="q3" value="o3"> (5²)*2<br>
                        <input type="radio" name="q3" value="o4"> 25*25<br>
                        <input type="radio" name="q3" value="o5"> Nenhuma das anteriores<br>
                    <br>
                    <h2>Qual das opçõeas abaixo não o resultado da equação a seguir: 1+1</h2>
                        <input type="radio" name="q4" value="o1"> ∛64 / 2<br>
                        <input type="radio" name="q4" value="o2"> (4³/64)*2<br>
                        <input type="radio" name="q4" value="o3"> 1+1+1+1-1-1+1-1+1-1-1+1-1-1+1+1<br>
                        <input type="radio" name="q4" value="o4"> os dois primeiros números do ano
                         de lançamento da canção "Não quero dinheiro (Só quero amar)" somados - os dois ultimos números
                         da data de lançamento da mesma somados<br>
                        <input type="radio" name="q4" value="o5"> 3<br>
                    <br>
                    <h2>qual das equações a seguir é possivel?</h2>
                        <input type="radio" name="q5" value="o1"> x = 2/0<br>
                        <input type="radio" name="q5" value="o2"> √(x + 5) = -2<br>
                        <input type="radio" name="q5" value="o3"> x = 0<br>
                        <input type="radio" name="q5" value="o4"> log(x - 3) = 0<br>
                        <input type="radio" name="q5" value="o5"> 2x + 3y = 10<br>
                    <br>
                <input type="submit" value="Enviar">
            </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $q1 = $_POST['q1'];
                $q2 = $_POST['q2']; 
                $q3 = $_POST['q3']; 
                $q4 = $_POST['q4']; 
                $q5 = $_POST['q5'];
                if($q1 == "o1"){
                    $contagem ++;
                }
                if($q2 == "o5"){
                    $contagem ++;
                }
                if($q3 == "o3"){
                    $contagem ++;
                }
                if($q4 == "o5"){
                    $contagem ++;
                }
                if($q5 == "o3"){
                    $contagem ++;
                }
                $usuario = new VerificarUsuario();
                $usuario->adicionarPontucao($contagem);
                $contagem = 0; 
            }
        break;
        case 3://utiliza a mesma lógica do case 1
            ?>
            <form method="POST" action="quiz.php">
                    <h2>Onde fica a Jamaica</h2>
                        <input type="radio" name="q1" value="o1"> Europa<br>
                        <input type="radio" name="q1" value="o2"> America central<br>
                        <input type="radio" name="q1" value="o3"> Africa<br>
                        <input type="radio" name="q1" value="o4"> Asia<br>
                        <input type="radio" name="q1" value="o5"> America do Norte<br>
                    <br>
                    <h2>Qual é a capital da China</h2>
                        <input type="radio" name="q2" value="o1"> Pequim<br>
                        <input type="radio" name="q2" value="o2"> Hong Kong<br>
                        <input type="radio" name="q2" value="o3"> Xangai<br>
                        <input type="radio" name="q2" value="o4"> Taiwan<br>
                        <input type="radio" name="q2" value="o5"> Nenhuma das anteriores<br>
                    <br>
                    <h2>Qual dos paises abaixo está na asia?</h2>
                        <input type="radio" name="q3" value="o1"> Marrocos<br>
                        <input type="radio" name="q3" value="o2"> Tunisia<br>
                        <input type="radio" name="q3" value="o3"> Turquia<br>
                        <input type="radio" name="q3" value="o4"> Azerbaijão<br>
                        <input type="radio" name="q3" value="o5"> Nenhuma das anteriores<br>
                    <br>
                    <h2>Qual dos paises a seguir não está localizado na America do Sul?</h2>
                        <input type="radio" name="q4" value="o1"> Equador<br>
                        <input type="radio" name="q4" value="o2"> Guiana Francesa<br>
                        <input type="radio" name="q4" value="o3"> Paraguai<br>
                        <input type="radio" name="q4" value="o4"> Costa Rica<br>
                        <input type="radio" name="q4" value="o5"> Suriname<br>
                    <br>
                    <h2>Qual nome a seguir não é um estado dos Estados Unidos da América</h2>
                        <input type="radio" name="q5" value="o1"> Louisiana<br>
                        <input type="radio" name="q5" value="o2"> Chicago<br>
                        <input type="radio" name="q5" value="o3"> Texas<br>
                        <input type="radio" name="q5" value="o4"> Ohio<br>
                        <input type="radio" name="q5" value="o5"> Florida<br>
                    <br>
                <input type="submit" value="Enviar">
            </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $q1 = $_POST['q1'];
            $q2 = $_POST['q2']; 
            $q3 = $_POST['q3']; 
            $q4 = $_POST['q4']; 
            $q5 = $_POST['q5'];
            if($q1 == "o2"){
                $contagem ++;
            }
            if($q2 == "o1"){
                $contagem ++;
            }
            if($q3 == "o3"){
                $contagem ++;
            }
            if($q4 == "o4"){
                $contagem ++;
            }
            if($q5 == "o2"){
                $contagem ++;
            }
            $usuario = new VerificarUsuario();
            $usuario->adicionarPontucao($contagem);
            $contagem = 0; 
        }
        break;
        
        default://Caso o usuário digite um número invalido para o quiz
            ?><h1 style="text-align: center; color: darkcyan;">QUIZ INVALIDO! SELECIONE UM VALOR QUE REPRESENTE UM QUIZ E TENTE NOVAMENTE</h1><?php
            break;
    }
}else{//mostrado caso o usuário não tenha um login ativo
    ?><h1 style="text-align: center; color: darkcyan;">USUÁRIO NÃO LOGADO! FAÇA O LOGIN E TENTE NOVAMENTE</h1><?php
}

?>
    <br>
    <div class="row mb-4">
    <div class="col d-flex justify-content-center">
      <div class="form-check">
         
      </div>
    </div>
  </body>
  <style>
    
  </style>
</html>
