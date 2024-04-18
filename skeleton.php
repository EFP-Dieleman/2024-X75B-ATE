<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROJECT</title>
    <link rel="stylesheet" href="X75B.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php
                $menu = [
                    'home' => 'Accueil',
                    'contact' => 'Contact',
                    'catalog' => 'Catalogue',
                    'register' => 'Inscription',
                    'login' => 'Connexion',
                    'logout' => 'Déconnexion',
                    'profile' => 'Profil',
                    'product' => 'Item'
                ];
                
                ?>
                <li><a href="index.php?page=contact">Contact</a></li>
                <li><a href="index.php?page=catalog">Catalogue</a></li>
                <li><a href="index.php?page=register">Inscription</a></li>
                <li><a href="index.php?page=login">Connexion</a></li>
                <li><a href="index.php?page=logout">Déconnexion</a></li>
                <li><a href="index.php?page=profile">Profil</a></li>
                <li><a href="index.php?page=product">Item</a></li>
            </ul>
        </nav>
    </header>

    <main>

        <?php
        if (file_exists($page))
            include $page;
        else
            include 'pages/home.html';
        ?>
    </main>
    <footer></footer>
</body>

</html>