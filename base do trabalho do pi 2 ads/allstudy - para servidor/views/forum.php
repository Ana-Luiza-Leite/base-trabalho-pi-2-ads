<?php

include 'conecta.php';
include 'conectauser.php';

if (isset($_SESSION['id_material'])) {

  $sql      = "SELECT * FROM tb_forum WHERE id_material = '{$_SESSION['id_material']}'";
  $retorno  = mysqli_query($conexao, $sql);
  $dados    = mysqli_fetch_all($retorno, MYSQLI_ASSOC);

  $sql      = "SELECT * FROM tb_material WHERE id_material = '{$_SESSION['id_material']}'";
  $retorno2 = mysqli_query($conexao, $sql);
  $dados2   = mysqli_fetch_assoc($retorno2);

}else {

  if (isset($_POST['id_material'])) {

    $_SESSION['id_material']= $_POST['id_material'];
    
      $sql      = "SELECT * FROM tb_forum WHERE id_material = '{$_SESSION['id_material']}'";
      $retorno  = mysqli_query($conexao, $sql);
      $dados    = mysqli_fetch_all($retorno, MYSQLI_ASSOC);
  
      $sql      = "SELECT * FROM tb_material WHERE id_material = '{$_SESSION['id_material']}'";
      $retorno2 = mysqli_query($conexao, $sql);
      $dados2   = mysqli_fetch_assoc($retorno2);
  
  } else {
  
      echo "<script>
              alert('Fórum não está relacionado nenhuma aula!');
              window.location.href='disciplinas.php';
          </script>";
          
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../views/novo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   

  <title>All Study - Fórum </title>
  <link rel="icon" href="../imagens/logo.png">
</head>

<body>
    <!--Header-->
<div id="header">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
        <img src="../imagens/logo.png" width="7%" height="100px" style="border-radius: 18px;"
        class="d-inline-block align-text-top" /><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="disciplinas.php">Disciplinas <span class="sr-only"></span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="perfil.php">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php" >Logout</a>
              </li>
            </ul>
          </div>
        </nav><br>
    </div>
    <!--corpo da página-->
    <div class='container'>
    <div class="row">
    <div class="col"style="background:transparent;margin-top:5%;margin-left:20px;margin-right:20px;height:90px; width: 200px;">
      <center>
            <?php
                if (mysqli_num_rows($retorno) > 0) {
                    echo '<div class="col-12 text-center">';
                                echo '<form action="cadastroMensagens.php" method="POST">';
                                foreach ($dados as $key => $value) {
                                    echo '<label class="col-12 text-left" for="descricao"><h5 style="color: rgb(223, 219, 217);">Descrição da pergunta</h5></label>';
                                    if ($value ['id_usuario'] == $_SESSION['id_usuario'] ) {
                                      echo '<input class="rounded col-12 py-3 bg-light" type="text" name="descricao" value="'.$value['descricao'].'" >';
                                      echo '<div class="col-12 text-right">';
                                                echo '<button class=" btn btn-light my-1 rounded" type="submit" value="'.$value['id_post'].'" name="editarc">Salvar/Editar</button><br>';
                                                echo '<button class=" btn btn-light my-1 rounded" type="submit" value="'.$value['id_post'].'" name="excluirc">Excluir comentário</button>';
                                            echo '</div>';
                                    }else {
                                      echo '<input class="rounded col-12 py-3 bg-light" type="text" name="descricao" value="'.$value['descricao'].'" disabled>';
                                    }
                                  echo '</form>';
                                    $sql      = "SELECT * FROM tb_resposta WHERE id_post = '{$value['id_post']}'";
                                    $retorno3 = mysqli_query($conexao, $sql);
                                    $dados3   = mysqli_fetch_all($retorno3, MYSQLI_ASSOC);
                                    if (mysqli_num_rows($retorno3) > 0) {
                                        echo '<form action="cadastroMensagens.php" method="POST">';
                                        foreach ($dados3 as $key => $valor) {
                                          echo '<div class="col-1"></div>';
                                          echo '<label class="col-11 text-left" for="resposta_post"><h5 style="color: rgb(223, 219, 217);">Resposta</h5></label>';
                                          echo '<div class="col-1"></div>';
                                          
                                            if ($valor['id_usuario'] == $_SESSION['id_usuario']) {
                                              echo '<input class="rounded col-11 py-3" type="text" name="resposta_post" value="'.$valor['resposta_post'].'">';
                                                   echo '<div class="col-11 ml-5 text-right">';
                                                        echo '<button class=" btn btn-light my-1 rounded" type="submit" value="'.$valor['id_resposta'].'" name="editarr">Salvar/Editar</button>';
                                                        echo '<button class=" btn btn-light my-1 ml-2 rounded" type="submit" value="'.$valor['id_resposta'].'" name="excluirr">Excluir resposta</button>';
                                                    echo '</div>';
                                            } else {
                                              echo '<input class="rounded col-11 py-3" type="text" name="resposta_post" value="'.$valor['resposta_post'].'" disabled>';
                                            }
                                        }
                                        echo '</form>';
                                    } 
                                    echo '<form action="cadastroMensagens.php" method="POST">';
                                        echo '<div class="col-1"></div>';
                                        echo '<label class="col-11 mt-3 text-left" for="resposta_post"><h5 style="color: rgb(223, 219, 217);">Nova resposta</h5></label>';
                                        echo '<div class="col-1"></div>';
                                        echo '<input class="rounded col-11 py-3" type="text" name="resposta_post" placeholder="Responda a dúvida...">';
                                        echo '<div class="col-11 text-right">';
                                            echo '<button class=" btn btn-light my-1 rounded" type="submit" name="enviarr" value="'.$value['id_post'].'">Enviar</button>';
                                        echo '</div>';
                                    echo '</form>';
                                }
                            }
                    echo '</div>';
                
               
                    echo'<div class="col-12 text-center">';
                        echo '<form action="cadastroMensagens.php" method="POST">';
                            echo '<label class="col-12  mt-3 text-left" for="descricao"><h5 style="color: rgb(223, 219, 217);">Nova Pergunta</h5></label>';
                            echo '<input class="rounded col-12 py-3" type="text" name="descricao" placeholder="Informe sua dúvida...">';
                            echo '<div class="col-12 text-right">';
                                echo '<button class=" btn btn-light my-1 rounded" type="submit" name="enviarc">Enviar</button>';
                            echo '</div>';
                        echo '</form>';
                    echo '</div>';

                    if (isset($_SESSION['tipo']) == 0){
                    echo '<a href="disciplinas.php"><button type="button">voltar</button></a>;'
                    }
                    elseif ($_SESSION['tipo'] == 1){
                     echo '<a href="disciplinas.php"><button type="button">voltar</button></a>';
                    }                
            ?>
            </center>
        </div>  
        </div>
        </div>
        <br> 
        <br>
        <br>

    <!--corpo da página-->
   
</body>
</html>