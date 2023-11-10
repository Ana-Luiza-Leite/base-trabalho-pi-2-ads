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

  <title>All Study - Estudante</title>
  <link rel="icon" href="../imagens/logo.png">
</head>

<body>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!--Header-->
  <div id="header">



    <nav class="navbar navbar-expand-lg navbar-light justify-content-between">

      <img src="../imagens/logo.png" width="7%" height="100px" style="border-radius: 18px;"
        class="d-inline-block align-text-top" /><button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
  <!--//header-->
  <!--corpo da pagina-->

  <div class='container'>
    <div class="row">
      <div class="col"
        style=" background: rgb(35, 236, 243);margin-top:10%;margin-left:20px;margin-right:20px;height:300px; width: 200px;">
        <center>
          <?php
        echo "<h4 style=margin-top:20px;> Guia de Usuário</h3>";
        echo "<h4>Saiba quais funcionalidades estão disponíveis</h3><br>";
        echo "<button style=background:rgb(35, 236, 243); margin-right:50px;><a style=color:white; border-radius:10px; href='funcionalidadese.php'><h4  style=color:black;>Funcionalidades</h4></a></button> <br>";
    ?>
        </center>
      </div>
      <div class="col"
        style=" background: rgb(35, 236, 243);margin-top:10%;margin-left:20px;margin-right:20px;height:300px; width: 200px;">
        <center>
          <?php
        echo "<h4 style=margin-top:20px;> Disciplinas</h3>";
        echo "<h4>Veja quais materiais estão disponíveis</h3><br>";
        echo "<button style=background:rgb(35, 236, 243); margin-right:50px;><a style=color:white; border-radius:10px; href='disciplinas.php'><h4  style=color:black;>Disciplinas</h4></a></button> <br>";
    ?>
        </center>
      </div>
      <div class="col"
        style=" background: rgb(35, 236, 243);margin-top:10%;margin-left:20px;margin-right:20px;height:300px; width: 200px;">
        <center>
          <?php
        echo "<h4 style=margin-top:20px;>Dicas de organização</h3>";
        echo "<h4>Veja aqui modelos de cronogramas e dicas de estudo</h3><br>";
        echo "<button style=background:rgb(35, 236, 243); margin-right:50px;><a style=color:white; border-radius:10px;  href='dicas.php'><h4  style=color:black;>Dicas de organização</h4></a></button> <br>";
    ?>
        </center>
      </div>
      <div class="col"
        style=" background: rgb(35, 236, 243);margin-top:10%;margin-left:20px;margin-right:20px;height:300px; width: 200px;">
        <center>
          <?php
        echo "<h4 style=margin-top:20px;> Banco de questões</h3>";
        echo "<h4>Exercite seus conhecimentos através de um quiz</h3><br>";
        echo "<button style=background:rgb(35, 236, 243); margin-right:50px;><a style=color:white; border-radius:10px; href='quiz.php' ><h4  style=color:black;>Perguntas</h4></a></button> <br>";
    ?>
        </center>
      </div>
    </div>
  </div>

  <!--corpo da pagina-->

</body>

</html>