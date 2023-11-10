<?php

include('conecta.php');

if(empty($_POST['email'])|| empty($_POST['senha'])){
    header('Location: principale.php');
    exit;
}

$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = "select email, tipo from tb_usuario where email ='{$email}' and senha = md5('{$senha}')";
$retorno = mysqli_query($conexao, $sql);
    $dados = mysqli_fetch_assoc($retorno);
    
    if (mysqli_num_rows($retorno) == 1) {
     
            session_start();
            $_SESSION['usuario']= $dados['email'];
            $_SESSION ['tipo'] = $dados['tipo'];
           //while($busca= $retorno->fetch_assoc()) {
            $tipo = $dados["tipo"];
            //echo $tipo;
          // }
           if($tipo== 0){
            echo "<script>
            alert('Login realizado com sucesso!Você irá ser redirecionado(a) para a sua tela principal.');
            window.location.href='../views/principale.php';
            </script>";

           }

          if($tipo == 1){
            echo "<script>
            alert('Login realizado com sucesso!Você irá ser redirecionado(a) para a sua tela principal.');
            window.location.href='../views/principalc.php';
            </script>";  
           
          }
        } else {
            echo "<script>
                    alert('Usuário não encontrado!');
                    window.location.href='../views/login.html';
                    </script>";
                }
            ?>
            