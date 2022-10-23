<?php
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categorias.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Time To Code</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <!-- Imagem de <a href="https://br.freepik.com/vetores-gratis/pacote-de-logotipo-de-codigo-plano_12151200.htm#query=logotipo%20codigo&position=6&from_view=keyword">Freepik</a> !-->
            <img src="<?= $BASE_URL ?>/img/logo.png" alt="Blog Time To Code">
        </a>

        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
                <li><a href="<?= $BASE_URL ?>categorias.php" class="nav-link">Categorias</a></li>
                <li><a href="<?= $BASE_URL ?>sobre.php" class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>contatos.php" class="nav-link">Contato</a></li>

            </ul>
        </nav>

    </header>
</body>
</html>