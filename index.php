<?php

$page = 'Page accueil defaut';

if (isset($_GET['page'])) {
    $page = realpath('pages/' . $_GET['page'] . '.html');
} elseif (isset($_GET['action'])) {
    die('SINGLE ACTION NO PAGE');
} else {
    $page = 'Page accueil';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link rel="stylesheet" href="X75B.css">
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li><a href="index.php?page=catalog">Catalogue</a></li>
            <li><a href="index.php?page=register">Inscription</a></li>
            <li><a href="index.php?page=login">Connexion</a></li>
            <li><a href="index.php?page=logout">Déconnexion</a></li>
            <li><a href="index.php?page=profile">Profil</a></li>
            <li><a href="index.php?page=product">Item</a></li>
        </ul>
    </nav>

    <?php
    if (file_exists($page))
        include $page;
    else
        include 'pages/home.html';
    ?>
</body>

</html>