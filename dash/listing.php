<a href="index.php?page=alter">New</a>

<ul>
<?php


$stmt = $pdo->query('SELECT id, label FROM category');
while ($row = $stmt->fetch()) {
    printf('<li><a href="index.php?page=alter&id=%d">%s</a></li>', $row['id'], $row['label']);
}
?>
</ul>
