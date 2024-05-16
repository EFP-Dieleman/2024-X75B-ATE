<?php


// connection à la db
require_once 'connection.php';


// determiner la page a afficher
$page = 'home';

if (isset($_GET['page'])) {
    $page = realpath('pages/' . $_GET['page'] . '.php');
} elseif (isset($_GET['action'])) {
    die('SINGLE ACTION NO PAGE');
}

// afficher la page
require_once 'skeleton.php';

?>

