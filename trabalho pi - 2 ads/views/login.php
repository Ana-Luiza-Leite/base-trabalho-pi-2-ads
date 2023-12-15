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
//var_dump($email); -> retornou corretamente
$senha = pg_escape_string($conn, $_POST['senha']);
//var_dump($senha); -> retornou certo
$sql = "SELECT ds_email, f_isFuncionario FROM livraria.tb_pessoa WHERE ds_email = $1 AND senha = md5($2)";
$result = pg_prepare($conn, "my_query", $sql);
$retorno = pg_execute($conn, "my_query", array($email, $senha));
var_dump($retorno);
if (!$retorno) {
    die("Erro na consulta SQL: " . pg_last_error($conn));
}
$dados = pg_fetch_assoc($retorno);

$rows = pg_num_rows($retorno);

//echo "LINHAS ENCONTRADAS" . $rows;

 //if (pg_num_rows($retorno) == 1) {
   // $_SESSION['usuario'] = $dados['ds_email'];
    //$_SESSION['f_isFuncionario'] = $dados['f_isFuncionario'];
     //var_dump($dados['f_isFuncionario']);
    //var_dump($_SESSION);
     //$tipo = $dados["f_isFuncionario"];
    //var_dump($tipo);
    //if ($tipo == false) {
      //header('Location: ../views/principalc.php');
        //exit;
     //} else {
     //header('Location: ../views/principalf.php');
       //exit;
     //}
 //} else {
   //  header('Location: index.html');
     //exit;
 //}
?>