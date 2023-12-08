<?php
$host = "200.19.1.18"; 
$dbname = "analeite";
$user = "analeite";
$password = "123456";

// Conectar ao PostgreSQL
$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$conn) {
    echo "Falha na conexão com o PostgreSQL. ";
    echo "Detalhes do erro: " . pg_last_error($conn);
    exit;
}
?>
