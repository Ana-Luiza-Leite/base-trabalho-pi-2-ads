<!--require_once('verificarUsuario.php');  colocar o abre e fecha do php-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros- Page</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="icon" href="../imagens/logo.png">

</head>

<body>

    <center>
        <header>
            <!--cabeçalho/menu-->

            <ul>
                <a href="#"><img src="../imagens/logo.png" class="logo"></a>
                <li><a href="../views/inicial.html">Página Inicial</a></li>
                <li><a href="../views/index.html">Saiba Mais</a></li>
                <li><a href="../views/logout.php">Logout</a></li>
            </ul>
        </header>
    </center>
    <div class="fundo">
        <div class="container branco">
            <div class='container'>
                <div class="row">
                    <div class="col"
                        style="background: white;margin-top:5%;margin-left:20px;margin-right:20px;height:420px; width: 200px;">
                        <center>

                            <form method="post" action=" " enctype="multipart/form-data">
                                <input value="<?php echo $id_pessoa;?>" name="id_pessoa" type="hidden">
                                <div class="mb-3">
                                    <?php
                                echo "<br>";
                                echo "<br>";
                             ?>
                                    <h2><label for="cadastromateria" class="form-label">Cadastro de Livros</label></h2>
                                    <div class="mb-3">
                                        <label for="nm_livro" class="form-label">Titulo</label>
                                        <input type="text" name="nm_livro" class="form-control" id="nm_livro"
                                            placeholder="Digite a descrição do conteúdo" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="file" name="ds-arquivo" placeholder="Selecione um arquivo...">
                                    </div>
                                    <div class="mb-3">
                                        <label for="ds_descricao" class="form-label">Descrição</label>
                                        <input type="text" name="ds_descricao" class="form-control" id="ds_descricao"
                                            placeholder="Digite a descrição do conteúdo" required>
                                    </div>
                                    <label>Gênero:</label><br>
                                        <?php
                                        // Conexão com o banco de dados
                                        include('conecta.php');

                                        // Consulta para obter as categorias
                                        $result = pg_query($conn, "SELECT * FROM livraria.tb_genero");

                                        // Loop para exibir checkboxes para cada categoria
                                        while ($row = pg_fetch_assoc($result)) {
                                            echo "<label class='checkbox1'>";
                                            echo "<input type='checkbox' name='generos[]' value='{$row['id_genero']}'> {$row['nome_categoria']}";
                                            echo "</label><br>";
                                        }

                                        // Fechar a conexão
                                        pg_close($conn);
                                        ?>
                                    <div class="text-center">
                                        <button type="submit" name="acao" value="cadastrar"
                                            class="btn btn-primary">Cadastrar</button>
                                    </div>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>