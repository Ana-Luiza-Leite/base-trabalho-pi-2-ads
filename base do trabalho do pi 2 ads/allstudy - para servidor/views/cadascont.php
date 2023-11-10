<?php
session_start();
include ("conecta.php");
$id= mysqli_real_escape_string ($conexao, trim($_POST['id']));
$nm_materia= mysqli_real_escape_string ($conexao, trim($_POST['nm_materia']));
$conteudo = mysqli_real_escape_string ($conexao, trim($_POST['conteudo']));
//$arquivo = mysqli_real_escape_string ($conexao, trim($_FILES['arquivo']));
if(isset($_POST['acao'])){
  //formulário foi enviado!
  $arquivo = $_FILES['arquivo'];
  //print_r($arquivo);
  $arquivoNovo= explode('.',$arquivo['name']);
  //echo'$arquivo';
  if($arquivoNovo[sizeof($arquivoNovo)-1] != 'pdf'){

    echo "<script>
    alert('Você não pode cadastrar arquivos com está extensão!Você irá ser redirecionado(a) para tela de cadastramento de material.');
    window.location.href='../views/cadasconte.php';
    </script>";

  }else{
    $sql= "INSERT INTO tb_material (id_usuario, nm_materia, conteudo, arquivo) VALUES ('$id','$nm_materia','$conteudo','$arquivo[name]')";
    move_uploaded_file($arquivo['tmp_name'],'upload/'.$arquivo['name']);
    $retorno = mysqli_query($conexao, $sql);
    if ($retorno) {
      
      echo "<script>
      alert('Novo cadastro de material realizado com sucesso! Você irá ser redirecionado(a) para sua tela principal.');
      window.location.href='../views/principalc.php';
      </script>";
      } 
    else {
        echo "<script>
        alert('Erro ao realizar o cadastro!Você irá ser redirecionado(a) para tela de cadastramento de material.');
        window.location.href='../views/cadasconte.php';
        </script>";
    }      

           
  } 
}
       // echo "<script>
        //alert('enviado com sucesso !');
        //window.location.href='../views/principalc.php';
        //</script>";


//$sql = "SELECT nm_materia from tb_materia where nm_materia = '{$nm_materia}'";

//$retorno = mysqli_query($conexao, $sql);
  //  $dados = mysqli_fetch_assoc($retorno);
    
//if (mysqli_num_rows($retorno) > 0) {
 //   echo "<script>
   //         alert('Já existe o material cadastrado!');
     //       window.location.href='../views/cadascont.html';
       // </script>";
//}else{


?> 