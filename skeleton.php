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

                foreach($menu as $href => $label){
                    // echo '<li><a href="index.php?page=' . $href . '">' . $label . '</a></li>';
                    printf('<li><a href="index.php?page=%s">%s</a></li>', $href, $label);
                    
                }
                
                ?>
               
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
    <footer>
        <div>
            <!-- info contact -->
            X75B
            02 386 70 58
            x75b@amstram.Be
            
            <!-- socials -->
            FB
            X
            INSTA
            LINKED
        </div>
        
        <div>

            <!-- maps -->
        </div>
            
        <div>

            <!-- partenaires/liens/CGV -->
        </div>

        <div>
            <!-- copyright -->
        </div>
    </footer>
</body>

</html>