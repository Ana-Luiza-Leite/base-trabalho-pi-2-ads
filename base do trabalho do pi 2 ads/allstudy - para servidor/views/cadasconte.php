<?php
    include "conecta.php";
    session_start();
    $email = $_SESSION['usuario'];
  
  $consulta = "SELECT * FROM tb_usuario WHERE email = '{$email}'";
  $resultado= $conexao->query($consulta);
  while ($row = $resultado->fetch_assoc()) {
   $id = $row['id_usuario'];
    $nome = $row['nome'];
   
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
  <title> All Study - Cadastro de material</title>
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
        </nav><br>
</div>
    <!--//header-->
    <div class='container'>
    <div class="row">
    <div class="col"style="background: white;margin-top:5%;margin-left:20px;margin-right:20px;height:420px; width: 200px;">
      <center>
            
                <form method="post" action="cadascont.php" enctype="multipart/form-data">
                  <input value="<?php echo $id;?>" name="id" type="hidden">
                    <div class="mb-3">
                      <?php
                        echo "<br>";
                        echo "<br>";
                      ?>
                        <h2><label for="cadastromateria" class="form-label">Cadastro de Materiais</label></h2>
                    </div>
                    <div class="mb-3">
                        <label for="nm_materia" class="form-label">Nome da Matéria</label>
                        <select name="nm_materia" id="nm_materia">
                          <option value="Física">Física</option>
                          <option value="Matemática">Matemática</option>
                          <option value="Português">Português</option>
                          <option value="Química">Química</option>
                         
                          </select>
                          
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com o nome da matéria.</div>
                    </div>
                    <div class="mb-3">
                        <label for="conteudo" class="form-label">Conteúdo</label>
                        <input type="text" name="conteudo" class="form-control" id="conteudo"placeholder="Digite a descrição do conteúdo" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com a descrição do conteúdo.</div>
                    </div>
                    <div class="mb-3">
                        <input type="file" name="arquivo" placeholder="Selecione um arquivo...">
                    </div>
                    <div class="text-center">
                        <button type="submit"  name="acao" value="cadastrar" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>
</center>
</div>
</div>
</div>
<footer>
    <nav class="navbar fixed-bottom navbar-light d-flex justify-content-left align-items-center">
      <a href="principalc.php">
        <button class=" btn btn-outline-dark text-light btn-lg rounded-circle">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16"><path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
        </svg>
        </button>
      </a>
    </nav>
  </footer>
</body>
</html>