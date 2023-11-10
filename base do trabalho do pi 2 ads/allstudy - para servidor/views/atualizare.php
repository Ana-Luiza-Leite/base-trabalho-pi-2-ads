<?php
    include "conecta.php";
   

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $id = $_POST['id'];

    $sql = "UPDATE tb_usuario SET nome='$nome', email='$email' WHERE id_usuario='$id'";
    if (mysqli_query($conexao, $sql)) {

        echo "<script>
                alert('Dados atualizados com sucesso!');
                window.location.href='../views/perfil.php';
            </script>";
    } else {
       
        echo "<script>
                alert('Erro ao atualizar os dados!');
                window.location.href='../views/perfil.php';
            </script>";
    }

?>