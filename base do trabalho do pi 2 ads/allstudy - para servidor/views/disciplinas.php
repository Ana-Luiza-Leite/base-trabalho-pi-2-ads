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


  <title>All Study - Disciplinas</title>
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

  </div>
  <!--//header-->
  <!--corpo da pagina-->

  <div class='container'>
    <div class="row">
      <div class="col"
        style=" background:transparent ;margin-top:5%;margin-left:20px;margin-right:20px;height:300px; width: 200px;">
        <center>
          <?php echo "<br>"; ?>
          <div class="text-center">
            <a class="link" href='materiais.php?nm_materia="Física"'> <button type="submit" class="btn btn-primary"
                style="height: 50px;width: 200px;">
                <h4>Física</h4>
              </button></a>
          </div>
          <?php echo "<br>"; ?>
          <div class="text-center">
            <a class="link" href='materiais.php?nm_materia="Matemática"'> <button type="submit" class="btn btn-primary"
                style="height: 50px;width: 200px;">
                <h4>Matemática</h4>
              </button></a>
          </div>
          <?php echo "<br>"; ?>
          <div class="text-center">
            <a class="link" href='materiais.php?nm_materia="Português"'> <button type="submit" class="btn btn-primary"
                style="height: 50px;width: 200px;">
                <h4>Português</h4>
              </button></a>
          </div>
          <?php echo "<br>"; ?>
          <div class="text-center">
            <a class="link" href='materiais.php?nm_materia="Química"'> <button type="submit" class="btn btn-primary"
                style="height: 50px;width: 200px;">
                <h4>Química</h4>
              </button></a>
          </div>
        </center>
      </div>
    </div>
  </div>
  </div>
  <!--corpo da pagina-->

</body>

</html>