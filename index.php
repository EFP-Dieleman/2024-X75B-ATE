<?php

$page = 'Page accueil defaut';

if (isset($_GET['page'])) {

    if ($_GET['page'] == 'contact') {
        $page = 'Page contact';
    } else if ($_GET['page'] == 'catalog') {
        $page = 'Page catalogue';
    } else if ($_GET['page'] == 'register') {
        $page = 'Page inscription';
    } else if ($_GET['page'] == 'login') {
        $page = 'Page login';
    } else if ($_GET['page'] == 'logout') {
        $page = 'Page logout';
    } else if ($_GET['page'] == 'profile') {
        $page = 'Page profile';
    } else if ($_GET['page'] == 'product') {
        $page = 'Page item';
    }
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
    <?php echo $page ?>
</body>
</html>