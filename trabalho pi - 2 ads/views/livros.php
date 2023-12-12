<?php
include('conecta.php');

// Consulta SQL para obter livros de todos os gêneros
$sql = "SELECT livraria.tb_livro.nm_livro, livraria.tb_livro.ds_arquivo, livraria.tb_genero.nm_genero
        FROM livraria.tb_livro
        JOIN livraria.tb_GeneroLivro ON livraria.tb_livro.id_livro = livraria.tb_GeneroLivro.id_livro
        JOIN livraria.tb_genero ON livraria.tb_GeneroLivro.id_genero = livraria.tb_genero.id_genero";

// Executar a consulta
$result = pg_query($conn, $sql);

// Exibir resultados em HTML
if ($result) {
    echo "<h2>Livros por Gênero:</h2>";
    echo "<ul>";

    // Loop através dos resultados
    while ($row = pg_fetch_assoc($result)) {
        echo "<li><strong>Livro:</strong> " . $row['nm_livro'] . " | <strong>Gênero:</strong> " . $row['nm_genero'] . " | <strong>Arquivo:</strong> <a href='" . $row['ds_arquivo'] . "'>" . $row['ds_arquivo'] . "</a></li>";
    }

    echo "</ul>";
} else {
    echo "Erro na consulta: " . pg_last_error($conn);
}

?>
