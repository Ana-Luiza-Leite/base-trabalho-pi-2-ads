<?php
if (!isset($_SESSION)) {
    session_cache_expire(60);
    session_start();
    
    $sql = "SELECT * FROM tb_usuario WHERE email = '{$_SESSION['usuario']}'";
    $return = mysqli_query($conexao,$sql);
    $dadinhos = mysqli_fetch_all($return, MYSQLI_ASSOC);
    foreach ($dadinhos as $key => $value) {
        $_SESSION ['id_usuario'] = $value['id_usuario'];
    }

}

if (!isset($_SESSION['usuario'])) {
    echo "<script>
            alert ('Você não pode acessar essa página pois não está logado.');
            window.location.href='login.php';
          </script>";
    die();
}
?>