<a href="index.php?type=theme&page=alter">New</a>
<ul>
    <?php
    $stmt = $pdo->query('SELECT id, label FROM theme');
    while ($row = $stmt->fetch()) {
        printf('<li><a href="index.php?type=theme&page=alter&id=%d">%s</a></li>', $row['id'], $row['label']);
    }
    ?>
</ul>