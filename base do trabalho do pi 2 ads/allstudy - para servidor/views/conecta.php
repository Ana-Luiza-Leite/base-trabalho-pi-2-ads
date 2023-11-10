<?php
$conexao = mysqli_connect("localhost", "root", "Ifsul2023@!", "allstudy");

// Verificar se conseguiu estabelecer a conexao
if (!$conexao) {
  
    die("Falha na conexão com o banco: " . mysqli_connect_error());
   
}

?>