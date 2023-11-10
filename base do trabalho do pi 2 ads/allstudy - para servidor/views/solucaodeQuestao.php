<?php
include "conecta.php";
include "conectauser.php";

if (isset($_POST['conferirResposta'])) {

    $id_questao = $_POST['conferirResposta'];
    $sql = "SELECT * FROM tb_questoes WHERE id_questoes = '{$id_questao}'";
    $resultado= $conexao->query($sql);
    $row = $resultado->fetch_all(MYSQLI_ASSOC);

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=
    , initial-scale=1.0">
  <title>All Study - Mostrar Resposta</title>
  <link rel="icon" href="../imagens/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="../views/novo.css">

</head>

<body>
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
            <a class="nav-link" href="principale.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class='container'>
    <div class="row">
      <div class="col"
        style=" background: rgb(35, 236, 243);margin-top:5%;margin-left:20px;margin-right:20px;height:300px; width: 200px;">
        <form action="quiz.php" method="POST" id="resposta">
          <?php 
        foreach ($row as $key => $value) {
            echo "<br>";
            //  echo "<h5>Título do conteúdo: ".$conteudo[$i]."</h5><br>";
            echo "<h5> Resposta correta: ".$value['correta']." </h5><br>";
            echo "<h5> Justificativa da resposta: ".$value['comentario']." </h5><br>";
            echo "<div id='btn quiz'>";
            echo "<button class='btn btn-light my-1 rounded' type='submit' name='conferirResposta' id='conferirResposta' value='".$value['id_questoes']."'>Próxima questão</button>";
            echo "<button class='btn btn-light my-1 rounded'type='submit' name='conferirResposta' id='conferirResposta' formaction='principale.php'>Voltar tela inicial</button>";
            echo "</div>";
        }
         ?>


        </form>
      </div>
    </div>
  </div>

  <!--DENTRO DO BODY
        display: flex 
        flex-direction: colummn
        -->
  <!--DENTRO DO BTN QUIZ
        display: flex;
        flex- direction: row;
    -->
</body>

</html>