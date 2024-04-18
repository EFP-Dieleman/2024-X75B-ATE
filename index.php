<?php

$page = 'home';

if (isset($_GET['page'])) {
    $page = realpath('pages/' . $_GET['page'] . '.html');
} elseif (isset($_GET['action'])) {
    die('SINGLE ACTION NO PAGE');
} else {
    $page = 'home';
}

include 'skeleton.php';

?>

