<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="customizacao.css">
    <title>Cadastro Livro</title>
    <link rel="icon" href="../imagens/logo.png">
</head>

<body>
    <div class='container'>
        <div class="row">
        <div class="col"style="background: white;margin-top:5%;margin-left:20px;margin-right:20px;height:900px; width: 200px; border-radius: 10px;">
          <center>
              <h4></h4>
                <div class="col-4">
                    <a class="navbar-brand imagem" href="#">
                        <img src="../imagens/logo.png" width="100%" height="300px" style="border-radius: 18px;" class="d-inline-block align-text-top">
                    </a>
                </div>
                <div class="col-8 formulario">
                <form method="post" action="cadastrar_livro.php" enctype="multipart/form-data">
                <div class="mb-3">
                                <?php
                                echo "<br>";
                                echo "<br>";
                                ?>
                                <h2><label for="cadastroLivros" class="form-label">Cadastro de Livros</label></h2>
                                <div class="mb-3">
                                    <label for="nm_livro" class="form-label">Titulo</label>
                                    <input type="text" name="nm_livro" class="form-control" id="nm_livro"
                                        placeholder="Digite o título do livro" required>
                                </div><br>

                        <input type="file" name="ds-arquivo" placeholder="Selecione um arquivo..."><br><br>
                        <div class="mb-3">
                                    <label for="ds_descricao" class="form-label">Descrição</label>
                                    <input type="text" name="ds_descricao" class="form-control" id="ds_descricao"
                                        placeholder="Digite a descrição do livro" required>
                                </div><br>
                        <label for="nm_genero" class="form-label">Gênero</label><br>
                        <select name="nm_genero[]" id="nm_genero" multiple>
                            <option value="1">Romance</option>
                            <option value="2">Diversos</option>
                            <option value="3">Bibliografia</option>
                            <option value="4">Fantasia</option>
                        </select><br>

                        <div class="text-center">
                            <button type="submit" name="acao" value="cadastrar"
                                class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </div>
                </center>
            </div>
        </div>
    </div>
    <br><br>
    <footer>
        <nav class="navbar fixed-bottom navbar-light d-flex justify-content-left align-items-center">
          <a href="../views/principalf.php">
            <button class=" btn btn-outline-dark text-light btn-lg rounded-circle">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-reply-fill" viewBox="0 0 16 16">
                    <path d="M5.921 11.9 1.353 8.62a.719.719 0 0 1 0-1.238L5.921 4.1A.716.716 0 0 1 7 4.719V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"/>
                  </svg>
            </button>
          </a>
        </nav>
      </footer>
</body>

</html>
