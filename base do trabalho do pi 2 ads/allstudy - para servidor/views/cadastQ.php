<?php

include ("conecta.php");

$id= mysqli_real_escape_string ($conexao, trim($_POST['id']));
$nm_disciplina= mysqli_real_escape_string ($conexao, trim($_POST['nm_disciplina']));
$questao= mysqli_real_escape_string ($conexao, trim($_POST['questao']));
$alternativa1 = mysqli_real_escape_string ($conexao, trim($_POST['alternativa1']));
$alternativa2 = mysqli_real_escape_string ($conexao, trim($_POST['alternativa2']));
$alternativa3 = mysqli_real_escape_string ($conexao, trim($_POST['alternativa3']));
$alternativa4 = mysqli_real_escape_string ($conexao, trim($_POST['alternativa4']));
$alternativa5 = mysqli_real_escape_string ($conexao, trim($_POST['alternativa5']));
$correta = mysqli_real_escape_string ($conexao, trim($_POST['correta']));
$comentario = mysqli_real_escape_string ($conexao, trim($_POST['comentario']));

    $sql= "INSERT INTO tb_questoes (nm_disciplina, id_usuario, questao, alternativa1, alternativa2, alternativa3, alternativa4, alternativa5, correta, comentario) 
    VALUES ('$nm_disciplina','$id','$questao','$alternativa1', '$alternativa2', '$alternativa3', '$alternativa4', '$alternativa5','$correta','$comentario')";
   // $retorno = mysqli_query($conexao, $sql);
    if (mysqli_query($conexao, $sql)) {
        echo "<script>
                alert('Novo cadastro de questões realizado com sucesso! Você irá ser redirecionado(a) parasua tela principal.');
                window.location.href='../views/principalc.php';
            </script>";
    } else {
        echo "<script>
                alert('Erro ao realizar o cadastro!');
                
            </script>";
    }
    
       // echo "<script>
        //alert('enviado com sucesso !');
        //window.location.href='../views/principalc.php';
        //</script>";


//$sql = "SELECT nm_materia from tb_materia where nm_materia = '{$nm_materia}'";

//$retorno = mysqli_query($conexao, $sql);
  //  $dados = mysqli_fetch_assoc($retorno);
    
//if (mysqli_num_rows($retorno) > 0) {
 //   echo "<script>
   //         alert('Já existe o material cadastrado!');
     //       window.location.href='../views/cadascont.html';
       // </script>";
//}else{


?> 