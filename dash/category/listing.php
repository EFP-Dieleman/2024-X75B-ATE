<a href="index.php?type=category&page=alter">New</a>
<ul>
    <?php
    $stmt = $pdo->query('SELECT id, label FROM category');
    while ($row = $stmt->fetch()) {
        printf('<li><a href="index.php?type=category&page=alter&id=%d">%s</a></li>', $row['id'], $row['label']);
    }
    ?>
</ul>