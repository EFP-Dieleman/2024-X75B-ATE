<?php
require_once '../connection.php';

// determiner la page a afficher
$page = 'listing';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} 

// afficher la page
require_once 'backend.php';