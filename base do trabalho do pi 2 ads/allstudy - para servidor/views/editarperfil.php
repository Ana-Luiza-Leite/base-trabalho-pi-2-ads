<?php
    include "conecta.php";

    $id = $_GET['id'];
    $consulta = "SELECT * FROM tb_usuario WHERE id_usuario = '{$id}'";
    $resultado= $conexao->query($consulta);
    while ($row = $resultado->fetch_assoc()) {
      $nome = $row['nome'];
      $email = $row['email'];
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
  <link rel="stylesheet" href="customizacao.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <title>All Study - Editar Perfil de Usuário</title>
  <link rel="icon" href="../imagens/logo.png">
</head>
<body>
     <!--Header-->
  <div id="header">

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
    <a class="navbar-brand" href="../imagens/logo.png">
      <img src="../imagens/logo.png" width="100%" height="100px" style="border-radius: 18px;"
        class="d-inline-block align-text-top" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="principale.html">Home <span class="sr-only"></span></a>
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
<div class="col-8 formulario">
                    <form method="post" action="atualizare.php">
                        <input value="<?php echo $id;?>" name="id" type="hidden">
                        <div class="mb-3">
                            <h2><label for="cadastroe" class="form-label">Cadastro de Estudante</label></h2>
                        </div>
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input value="<?php echo $nome; ?>" type="text" name="nome" class="form-control" id="nome"placeholder="Digite o nome completo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo com seu nome completo.</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input value="<?php echo $email; ?>" type="email" name="email" class="form-control" id="email"placeholder="Digite o seu e-mail" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo com seu e-mail.</div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>

                </div>
</body>
</html>