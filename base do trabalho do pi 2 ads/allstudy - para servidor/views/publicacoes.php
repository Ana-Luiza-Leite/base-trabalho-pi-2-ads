<?php
  include "conecta.php";
  include "conectauser.php";
  //session_start();

  //$id = $_GET["id_usuario"];
  //echo $id;
  //=".$id."
  $consulta = "SELECT conteudo, arquivo, id_material FROM tb_material WHERE id_usuario = '{$_SESSION['id_usuario']}' ;";
 //echo $consulta;
  $resultado= $conexao->query($consulta);
  //$id = [];
  $conteudo = [];
  $arquivo = [];
  $id_material = [];
  
  if ($resultado) {
  
   foreach($resultado as $re){
     
      array_push($conteudo, $re['conteudo']);
      array_push($arquivo, $re['arquivo']);
      array_push($id_material, $re['id_material']);
  
   }

   
  }else{
    
    die($conexao->error);
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

  <title>All Study - Suas Publicações </title>
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
  <!--corpo da página-->
  <div class='container'>
    <div class="row">
      <div class="col"
        style="background:transparent;margin-top:5%;margin-left:20px;margin-right:20px;height:700px; width: 200px;">
        <center>
          <form method="post" action="vistadeEditarMaterial.php" enctype="multipart/form-data">
            <input value="<?php echo $id;?>" name="id" type="hidden">
            <?php
                      for($i = 0; $i < count($conteudo); $i++){
                        echo "<h5>Título do conteúdo: ".$conteudo[$i]."</h5><br>";
                        echo "<a href= 'upload/".$arquivo[$i]."' style='color: black';><svg xmlns='http://www.w3.org/2000/svg' width='70' height='70' fill='currentColor' class='bi bi-filetype-pdf' viewBox='0 0 16 16'>
                        <path fill-rule='evenodd' d='M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z'/>
                      </svg></a><br><br>";
                        echo '<div class="col-12 text-right">';
                                                echo '<button class=" btn btn-light my-1 rounded" type="submit" value="'.$id_material[$i].'" name="id_material">Editar publicação</button><br>';
                                                echo '<button class=" btn btn-light my-1 rounded" type="submit" value="'.$id_material[$i].'" name="excluirc" formaction="editarMaterial.php">Excluir publicação</button>';
                                                echo "<br>";
                                                echo '</div>';
                                                echo "<br>";
                       // echo "<a href= 'forum.php?id_material=".$id_material[$i]."' >Tire sua dúvida aqui</a>";
                        //echo "<h5><button class='btn btn-primary' type='submit' name='id_material' value='".$id_material[$i]."' > Tire sua dúvida aqui! </button></h5>";
                      //<i class="bi bi-filetype-pdf"></i>
                        //echo "<input value='Tire sua dúvida aqui!' name='forum' id=".$id_material[$i]." type='submit'>";
                                       
                      }
                        ?>
        </center>
      </div>
    </div>
  </div>
  <!--corpo da página-->

</body>

</html>