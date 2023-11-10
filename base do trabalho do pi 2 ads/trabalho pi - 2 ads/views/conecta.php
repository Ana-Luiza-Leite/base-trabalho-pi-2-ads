<?php

try{
  $conexao = new PDO("pgsql: host= localhost dbname= analeite user= analeite.gr002@academico.ifsul.edu.br");
} catch (PDOException $e){
  print $e -> getMessage();
}
// Verificar se conseguiu estabelecer a conexao
//if (!$conexao) {
  
  //  die("Falha na conexão com o banco: " . mysqli_connect_error());
   
//}

//refazer conexão

?>