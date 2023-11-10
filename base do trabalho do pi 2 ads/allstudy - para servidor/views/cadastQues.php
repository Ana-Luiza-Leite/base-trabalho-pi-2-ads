<?php
  include "conecta.php";
  session_start();

  $email = $_SESSION['usuario'];
  
  $consulta = "SELECT * FROM tb_usuario WHERE email = '{$email}'";
  $resultado= $conexao->query($consulta);
  while ($row = $resultado->fetch_assoc()) {
   $id = $row['id_usuario'];
   
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

  <title>All Study - Cadastramento de Questões</title>
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
    <div class="col"style="background: white;margin-top:5%;margin-left:20px;margin-right:20px;height:850px; width: 200px;">
      <center>
                <form method="post" action="cadastQ.php" enctype="multipart/form-data">
                  <input value="<?php echo $id;?>" name="id" type="hidden">
                   <div class="mb-3">
                        <h2><label for="cadastromateria" class="form-label">Cadastro de Questões</label></h2>
                    </div>
                    <div class="mb-3">
                        <label for="nm_discipllina" class="form-label">Nome da Matéria</label>
                        <select name="nm_disciplina" id="nm_disciplina">
                          <option value="Física">Física</option>
                          <option value="Matemática">Matemática</option>
                          <option value="Português">Português</option>
                          <option value="Química">Química</option>
                         
                          </select>
                          
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com o nome da matéria.</div>
                    </div>
                    <div class="mb-3">
                        <label for="questao" class="form-label">Descrição da Questão</label>
                        <input type="text" name="questao" class="form-control" id="questao"placeholder="Digite a descrição do conteúdo" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com a descrição do conteúdo.</div>
                    </div>
                    <div class="mb-3">
                        <label for="alternativa1" class="form-label">Alternativa 1</label>
                        <input type="text" name="alternativa1" class="form-control" id="alternativa1"placeholder="Digite a descrição da alternativa 1" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com a alternativa1.</div>
                    </div>
                    <div class="mb-3">
                        <label for="alternativa2" class="form-label">Alternativa 2</label>
                        <input type="text" name="alternativa2" class="form-control" id="alternativa2"placeholder="Digite a descrição da alternativa 2" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com a  alternativa2.</div>
                    </div>
                    <div class="mb-3">
                        <label for="alternativa3" class="form-label">Alternativa 3</label>
                        <input type="text" name="alternativa3" class="form-control" id="alternativa3"placeholder="Digite a descrição da alternativa 3" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com a  alternativa3.</div>
                    </div>
                    <div class="mb-3">
                        <label for="alternativa4" class="form-label">Alternativa 4</label>
                        <input type="text" name="alternativa4" class="form-control" id="alternativa4"placeholder="Digite a descrição da alternativa 4" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com a  alternativa4.</div>
                    </div>
                    <div class="mb-3">
                        <label for="alternativa5" class="form-label">Alternativa 5</label>
                        <input type="text" name="alternativa5" class="form-control" id="alternativa5"placeholder="Digite a descrição da alternativa 5" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com a  alternativa5.</div>
                    </div>
                    <div class="mb-3">
                        <label for="correta" class="form-label">Número da Alternativa correta</label>
                        <input type="text" name="correta" class="form-control" id="correta"placeholder="Digite a resposta correta" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com a descrição da questão.</div>
                    </div>
                    <div class="mb-3">
                        <label for="comentario" class="form-label">Justificativa da resposta</label>
                        <input type="text" name="comentario" class="form-control" id="comentario"placeholder="Digite a justificativa da resposta" required>
                        <div class="valid-feedback">Válido.</div>
                        <div class="invalid-feedback">Por favor, preencha este campo com a descrição da questão.</div>
                    </div>
                    <div class="text-center">
                        <button type="submit"  value="cadastrar" class="btn btn-primary">Cadastrar</button>
                    </div>
             <center>
</div>
</div>
</div>
</body>
</html>