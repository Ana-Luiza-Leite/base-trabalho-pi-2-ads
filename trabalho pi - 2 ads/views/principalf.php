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
    <section>
        <center>
            <header>
                <!--cabeçalho/menu-->
                
                <ul>
                <a href="#"><img src="../imagens/logo.png" class="logo" ></a>
                    <li><a href="../views/principalf.php">Página Inicial</a></li>
                    <li><a href="../views/adicionarLivro.php">Cadastrar Livro</a></li>
                    <li><a href="../views/logout.php">Logout</a></li>
                </ul>
            </header>
        </center>
        <?php
            include 'livros.php';
        ?>
    </section>
    
</body>

</html>