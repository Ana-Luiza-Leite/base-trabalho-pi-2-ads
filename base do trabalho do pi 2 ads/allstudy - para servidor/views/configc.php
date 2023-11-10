<?php
session_start();
include ("conecta.php");

$nome = mysqli_real_escape_string ($conexao, trim($_POST['nome']));
$email = mysqli_real_escape_string ($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string ($conexao, trim(md5($_POST['senha'])));
$curriculo = mysqli_real_escape_string ($conexao, trim($_POST['curriculo']));

$sql = "SELECT email from tb_usuario where email = '{$email}'";

$retorno = mysqli_query($conexao, $sql);
if (mysqli_num_rows($retorno) > 0) {
    echo "<script>
            alert('Já existe o email cadastrado!');
            window.location.href='../views/cadastroc.html';
        </script>";
}else{

$sql= "INSERT INTO tb_usuario (nome, email, senha, curriculo, tipo) VALUES ('$nome','$email','$senha','$curriculo','1')";

if (mysqli_query($conexao, $sql)) {
    echo "<script>
            alert('Novo cadastro realizado com sucesso! Você irá ser redirecionado(a) para o login.');
            window.location.href='../views/login.html';
        </script>";
} else {
    echo "<script>
            alert('Erro ao realizar o cadastro!');
            window.location.href='../views/cadastroc.html';
        </script>";
}
}

?>
