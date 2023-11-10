<?php

include 'conecta.php';
include 'conectauser.php';

$sql      = "SELECT * FROM tb_forum WHERE id_material = '{$_SESSION['id_material']}'";
$retorno  = mysqli_query($conexao, $sql);
$dados    = mysqli_fetch_all($retorno, MYSQLI_ASSOC);
$cont     = 0;
   
if (isset($_POST['enviarc'])) {

    foreach ($dados as $key => $value) {
        $cont = $value['id_post'];
    }

    $cont = $cont + 1;
    $sql  = "INSERT INTO tb_forum (descricao, id_material, id_usuario) 
             VALUES ('{$_POST['descricao']}', '{$_SESSION['id_material']}', '{$_SESSION['id_usuario']}') ";
    mysqli_query($conexao, $sql);

} elseif (isset($_POST['editarc'])) {

    $sql     = "UPDATE tb_forum SET descricao='{$_POST['descricao']}' WHERE id_post='{$_POST['editarc']}'";
    echo $sql;
    mysqli_query($conexao, $sql);

} elseif (isset($_POST['excluirc'])) {

    $sql     = "DELETE FROM tb_forum WHERE id_post='{$_POST['excluirc']}'";
    mysqli_query($conexao, $sql);

} elseif (isset($_POST['enviarr'])) {

    $sql     = "INSERT INTO tb_resposta (resposta_post, id_post, id_usuario)
                VALUES ('{$_POST['resposta_post']}', '{$_POST['enviarr']}', '{$_SESSION['id_usuario']}') ";
    mysqli_query($conexao, $sql);

} elseif (isset($_POST['editarr'])) {

    $sql     = "UPDATE tb_resposta SET resposta_post='{$_POST['resposta_post']}' WHERE id_resposta='{$_POST['editarr']}'";
    mysqli_query($conexao, $sql);
    
} elseif (isset($_POST['excluirr'])) {

    $sql     = "DELETE FROM tb_resposta WHERE id_resposta='{$_POST['excluirr']}'";
    mysqli_query($conexao, $sql);
    
}

header("Location: forum.php");
?>