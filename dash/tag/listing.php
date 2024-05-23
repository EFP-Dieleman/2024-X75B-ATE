<a href="index.php?type=tag&page=alter">New</a>
<ul>
    <?php
    $stmt = $pdo->query('SELECT id, label FROM tag');
    while ($row = $stmt->fetch()) {
        printf('<li><a href="index.php?type=tag&page=alter&id=%d">%s</a></li>', $row['id'], $row['label']);
    }
    ?>
</ul>