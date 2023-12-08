<?php

include('conecta.php');

if (empty($_POST['ds_email']) || empty($_POST['senha'])) {
    header('Location: index.html');
    exit;
}

$email = pg_escape_string($conexao, $_POST['ds_email']);
$senha = pg_escape_string($conexao, $_POST['senha']);

$sql = "SELECT ds_email, f_isFuncionario FROM livraria.tb_pessoa WHERE ds_email = '{$email}' AND senha = md5('{$senha}')";
$retorno = pg_query($conexao, $sql);
$dados = pg_fetch_assoc($retorno);

if (pg_num_rows($retorno) == 1) {
    session_start();
    $_SESSION['usuario'] = $dados['ds_email'];
    $_SESSION['f_isFuncionario'] = $dados['f_isFuncionario'];

    $tipo = $dados["f_isFuncionario"];

    if ($tipo == 0) {
        echo "<script>
            alert('Login realizado com sucesso! Você será redirecionado(a) para sua tela principal.');
            window.location.href='../views/index.html';
            </script>";
    }

    if ($tipo == 1) {
        echo "<script>
            alert('Login realizado com sucesso! Você será redirecionado(a) para sua tela principal.');
            window.location.href='../views/index.html';
            </script>";
    }
} else {
    echo "<script>
        alert('Usuário não encontrado!');
        window.location.href='../views/login.html';
        </script>";
}

?>
