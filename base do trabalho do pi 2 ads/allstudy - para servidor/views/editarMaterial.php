<?php

include 'conecta.php';
include 'conectauser.php';
    $conteudo = $_POST['conteudo'];
   
    $arquivo = $_FILES['arquivo'];
   

    //$sql = "UPDATE tb_material SET conteudo='$conteudo', arquivo='$arquivo' WHERE id_usuario='$id'";
   
$sql      = "SELECT * FROM tb_material WHERE id_material = '{$_SESSION['id_material']}'";
$retorno  = mysqli_query($conexao, $sql);
$dados    = mysqli_fetch_assoc($retorno);
   
 if (isset($_POST['editarc'])) {

    $sql     = "UPDATE tb_material SET conteudo='{$conteudo}', arquivo='{$arquivo['name']}' WHERE id_material='{$_SESSION['id_material']}'";
    echo $sql;
    move_uploaded_file($arquivo['tmp_name'],'upload/'.$arquivo['name']);
    $retorno2 = mysqli_query($conexao, $sql);


} elseif (isset($_POST['excluirc'])) {

    $sql     = "DELETE FROM tb_material WHERE id_material='{$_POST['excluirc']}'";
    move_uploaded_file($arquivo['tmp_name'],'upload/'.$arquivo['name']);
    mysqli_query($conexao, $sql);

} 

header("Location: publicacoes.php");
?>