<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('conecta.php');

if (!$conn) {
    die("Erro na conexão com o banco de dados: ");
}

if (empty($_POST['ds_email']) || empty($_POST['senha'])) {
    header('Location: index.html');
    exit;
}

$email = pg_escape_string($conn, $_POST['ds_email']);
$senha = pg_escape_string($conn, $_POST['senha']);

$sql = "SELECT ds_email, f_isFuncionario FROM livraria.tb_pessoa WHERE ds_email = '{$email}' AND senha = md5('{$senha}')";
$retorno = pg_query($conn, $sql);

if (!$retorno) {
    die("Erro na consulta SQL: " . pg_last_error($conn));
}
$dados = pg_fetch_assoc($retorno);

$rows = pg_num_rows($retorno);

//echo "LINHAS ENCONTRADAS" . $rows

 if (pg_num_rows($retorno) == 1) {
     $_SESSION['usuario'] = $dados['ds_email'];
     $_SESSION['f_isFuncionario'] = $dados['f_isFuncionario'];

     $tipo = $dados["f_isFuncionario"];

     if ($tipo == 0) {
         header('Location: ../views/principalc.php');
         exit;
     } else {
         header('Location: ../views/principalf.php');
         exit;
     }
 } else {
     header('Location: index.html');
     exit;
 }
?>