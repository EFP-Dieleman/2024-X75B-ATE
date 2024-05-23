<?php
require_once '../connection.php';
// is an update ?
if(!empty($_POST['id'])){
    $sql = 'UPDATE category SET label = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['label'], $_POST['id']]);
}
else{
    $sql = 'INSERT INTO category (label) VALUES (?)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['label']]);
}

header('Location: index.php?page=listing');