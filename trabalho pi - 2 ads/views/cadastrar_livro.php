<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include('conecta.php');

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . pg_last_error($conn));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'cadastrar') {
    $nm_livro = pg_escape_string($conn, $_POST['nm_livro']);
    $ds_descricao = pg_escape_string($conn, $_POST['ds_descricao']);
    $id_genero = pg_escape_string($conn, $_POST['id_genero']);  // Adicionado id_genero

    // Ajuste na forma de obter o arquivo enviado
    if (isset($_FILES['ds-arquivo']) && $_FILES['ds-arquivo']['error'] === 0) {
        $imagem_tmp = $_FILES['ds-arquivo']['tmp_name'];
        $nome_imagem = $_FILES['ds-arquivo']['name'];
        $caminho_imagem = "png/" . $nome_imagem;

        if (move_uploaded_file($imagem_tmp, $caminho_imagem)) {
            echo "Arquivo enviado com sucesso.";
        } else {
            die("Erro ao mover o arquivo para o destino.");
        }
    } else {
        die("Erro no envio do arquivo.");
    }

    // Inserir na tabela tb_livro
    $sql_livro = "INSERT INTO livraria.tb_livro (nm_livro, ds_descricao, ds_caminho_imagem) VALUES ('$nm_livro', '$ds_descricao', '$caminho_imagem') RETURNING id_livro";

    $resultado_livro = pg_query($conn, $sql_livro);

    if (!$resultado_livro) {
        die("Erro na consulta SQL para inserção na tb_livro: " . pg_last_error($conn));
    }

    // Obter o id_livro gerado
    $id_livro = pg_fetch_result($resultado_livro, 0, 'id_livro');

    // Inserir na tabela tb_generoLivro
    $sql_genero_livro = "INSERT INTO livraria.tb_generoLivro (id_livro, id_genero) VALUES ($id_livro, $id_genero)";

    $resultado_genero_livro = pg_query($conn, $sql_genero_livro);

    if (!$resultado_genero_livro) {
        die("Erro na consulta SQL para inserção na tb_generoLivro: " . pg_last_error($conn));
    }

    header('Location: ../views/principalf.php');
    exit;
} else {
    // Se a requisição não for POST ou 'acao' não estiver definida ou for diferente de 'cadastrar'
    header('Location: ../index.html');
    exit;
}

// Fechar a conexão
pg_close($conn);
?>
