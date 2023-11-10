<?php

include 'conecta.php';
include 'conectauser.php';

if (isset($_POST['id_material'])) {

    $_SESSION['id_material']= $_POST['id_material'];

    $sql = "SELECT conteudo, arquivo FROM tb_material WHERE id_material = '{$_SESSION['id_material']}' ;";
    $retorno  = mysqli_query($conexao, $sql);
    $dados   = mysqli_fetch_assoc($retorno);

} else {
  
      echo "<script>
              alert('Não há material relacionado');
              window.location.href='publicacoes.php';
          </script>";
          
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

  <title>All Study - Editar Material </title>
  <link rel="icon" href="../imagens/logo.png">
</head>

<body>
  <!--Header-->
<div id="header">
  <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
  <img src="../imagens/logo.png" width="7%" height="100px" style="border-radius: 18px;"
        class="d-inline-block align-text-top" />
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="principalc.php">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="disciplinas.php">Disciplinas <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="perfil.php">Perfil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav><br>
</div>

  <!--corpo da págima-->
  <div class='container'>
    <div class="row">
    <div class="col"style="background:rgb(35, 236, 243);margin-top:5%;margin-left:20px;margin-right:20px;height:350px; width: 200px;">
      <center>
      <?php
                if (mysqli_num_rows($retorno) > 0) {
                    echo '<div class="col-12 text-center">';
                                echo '<form action="editarMaterial.php" method="POST" enctype="multipart/form-data">';
                                
                                   // if  ($value ['id_usuario'] == $_SESSION['id_usuario'] ) {
                                     echo "<br>";
                                        echo '<label class="col-12 text-left" for="conteudo"><h5 style="color: black;">Conteúdo: </h5></label>';
                                        echo '<input class="rounded col-12 py-3 bg-light" type="text" name="conteudo" value="'.$dados['conteudo'].'" >';
                                        echo '<label class="col-12 text-left" for="arquivo"><h5 style="color: black;">Arquivo: </h5></label>';
                                        echo '<input type="file" name="arquivo" placeholder="Selecione um arquivo...">';
                                        echo '<div class="col-12 text-right">';
                                                echo '<button class=" btn btn-light my-1 rounded" type="submit" value="'.$_SESSION['id_material'].'" name="editarc">Concluir edição</button>';
                                            echo '</div>';
                                    //}
                                  echo '</form>';
                            
                    echo '</div>';
                
                }
            ?>
      </center>
     </div>
     </div>
</div>
<!--/corpo da página-->
  <footer>
    <nav class="navbar fixed-bottom navbar-light d-flex justify-content-left align-items-center">
      <a href="publicacoes.php">
        <button class=" btn btn-outline-dark text-light btn-lg rounded-circle">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
          <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
        </svg> 
        </button>
      </a>
    </nav>
  </footer>
</body>

</html>