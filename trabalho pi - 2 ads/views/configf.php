<?php
session_start();
include("conecta.php");

$nome = pg_escape_string($conn, $_POST['nome']);
$data = pg_escape_string($conn, $_POST['date']);
$email = pg_escape_string($conn, $_POST['email']);
$senha = pg_escape_string($conn, $_POST['senha']);
$cpf = pg_escape_string($conn, $_POST['cpf']);

//var_dump($senha);
// Verificar o comprimento do e-mail
//echo "Comprimento do e-mail: " . strlen($email);

// Verificar se o e-mail já existe
$verificaQuery = "SELECT * FROM livraria.tb_pessoa WHERE ds_email = $1";
$verificaResult = pg_query_params($conn, $verificaQuery, array($email));

if (!$verificaResult) {
    echo "Erro ao verificar o e-mail: " . pg_last_error($conn);
    exit;
}

if (pg_num_rows($verificaResult) > 0) {
    echo "E-mail já existe. Por favor, escolha outro.";
    exit;
}

// Utilize password_hash para armazenar senhas de forma segura
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
//var_dump($senhaHash);
$id_pessoa = rand(1, 1000);
// Utilize Prepared Statements para prevenir injeção de SQL
$query = "INSERT INTO livraria.tb_pessoa (id_pessoa, nm_pessoa, dt_admissao, ds_email, senha, f_isFuncionario, nu_cpf) VALUES ($1, $2, $3, $4, $5,'1', $6)";
$params = array($id_pessoa, $nome, $data, $email, $senhaHash, $cpf);

$result = pg_query_params($conn, $query, $params);

if (!$result) {
    echo "Erro ao inserir dados: " . pg_last_error($conn);
    exit;
} else {
    echo "Dados inseridos com sucesso!";
    header("Location:../views/login.html");
    exit;
}

?>
