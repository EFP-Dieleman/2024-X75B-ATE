<?php
require_once '../connection.php';

// determiner la page a afficher
$page = 'listing';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} 
elseif (isset($_GET['action'])) {
    die('SINGLE ACTION NO PAGE');
}

// afficher la page
require_once 'backend.php';