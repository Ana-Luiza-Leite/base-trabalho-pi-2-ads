<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="novo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Funcionalidades - Colaborador</title>
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
            <li class="nav-item">
              <a class="nav-link" href="perfil.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php" >Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  <!--//header--> 
  <!--corpo da pagina-->
  <div class='container'>
    <div class="row">
    <div class="col"style="background: white;margin-top:5%;margin-left:20px;margin-right:20px;height:950px; width: 200px;">
      <center>
      <?php
        echo "<h4 style=margin-top:20px;>Perfil</h4><br>";
        echo "<h5>Se deseja visualizar seu nome completo e e-mail cadastrado na plataforma</h5>";
        echo "<a class='link' href='perfil.php'><button type='submit' class='btn btn-primary'>Clique aqui</button></a><br>";
        echo "<h4 style=margin-top:20px;>Página Principal do Colaborador</h4><br>";
        echo "<h5>Se deseja visualizar os tópicos disponíveis para este tipo de usuário</h5>";
        echo "<a class='link' href='principalc.php'><button type='submit' class='btn btn-primary'>Clique aqui</button></a><br>";
        echo "<h4 style=margin-top:20px;>Cadastrar Materiais</h4><br>";
        echo "<h5>Se deseja publicar materiais na plataforma</h5>";
        echo "<a class='link' href='cadasconte.php'><button type='submit' class='btn btn-primary'>Clique aqui</button></a><br>";
        echo "<h4 style=margin-top:20px;>Publicar Questões</h4><br>";
        echo "<h5>Se deseja publicar questões para os estudantes</h5>";
        echo "<a class='link' href='cadastQues.php'><button type='submit' class='btn btn-primary'>Clique aqui</button></a><br>";
        echo "<h4 style=margin-top:20px;>Seus Materiais</h4><br>";
        echo "<h5>Se deseja editar ou excluir algum material que publicou</h5>";
        echo "<a class='link' href='publicacoes.php'><button type='submit' class='btn btn-primary'>Clique aqui</button></a>"; 
        echo "<h4 style=margin-top:20px;>Materiais Publicados</h4><br>";
        echo "<h5>Se deseja visualizar os materiais publicados na plataforma</h5>";
        echo "<a class='link' href='disciplinas.php'><button type='submit' class='btn btn-primary'>Clique aqui</button></a>"; 
        echo "<h4 style=margin-top:20px;></h4><br>";
        
        ?>
      </center>
      <br>
    </div>
</div>
</div>  
  <!--/corpo da página-->              
  <footer>
    <nav class="navbar fixed-bottom navbar-light d-flex justify-content-left align-items-center">
      <a href="principalc.php">
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