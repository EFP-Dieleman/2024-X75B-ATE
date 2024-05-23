<?php
require_once '../../connection.php';


// is an update ?
if (empty($_POST['id'])) {
    $sql = 'INSERT INTO theme (label) VALUES (:label)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['label' => $_POST['label']]);
} else {
    $sql = 'UPDATE theme SET label = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['label'], $_POST['id']]);
}

header('Location: ../index.php?type=theme&page=listing');
