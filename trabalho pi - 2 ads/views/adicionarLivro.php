<?php
    require_once('verificarUsuario.php');
?>
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
    <div class='container'>
        <div class="row">
            <div class="col"
                style="background: white;margin-top:5%;margin-left:20px;margin-right:20px;height:420px; width: 200px;">
                <center>

                    <form method="post" action=" " enctype="multipart/form-data">
                        <input value="<?php echo $id;?>" name="id" type="hidden">
                        <div class="mb-3">
                            <?php
                                echo "<br>";
                                echo "<br>";
                             ?>
                            <h2><label for="cadastromateria" class="form-label">Cadastro de Livros</label></h2>
                            <label class="checkbox1">
                                <input type="checkbox" name="categorias[]" value="1"> AVIAÇÃO COMERCIAL
                            </label>

                            <label class="checkbox1">
                                <input type="checkbox" name="categorias[]" value="2"> AVIAÇÃO MILITAR
                            </label>

                            <label class="checkbox1">
                                <input type="checkbox" name="categorias[]" value="3"> TECNOLOGIA AERO
                            </label>
                        <div class="mb-3">
                            <label for="conteudo" class="form-label">Conteúdo</label>
                            <input type="text" name="conteudo" class="form-control" id="conteudo"
                                placeholder="Digite a descrição do conteúdo" required>
                            <div class="valid-feedback">Válido.</div>
                            <div class="invalid-feedback">Por favor, preencha este campo com a descrição do conteúdo.
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="file" name="arquivo" placeholder="Selecione um arquivo...">
                        </div>
                        <div class="text-center">
                            <button type="submit" name="acao" value="cadastrar"
                                class="btn btn-primary">Cadastrar</button>
                        </div>
                    </form>
                </center>
            </div>
        </div>
    </div>

</body>

</html>