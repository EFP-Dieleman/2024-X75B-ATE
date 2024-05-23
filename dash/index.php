<?php
require_once '../connection.php';

// determiner la page a afficher
$type = 'category';
$page = 'listing';

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

if (isset($_GET['type'])) {
    $type = $_GET['type'];
} 

// afficher la page
require_once 'backend.php';