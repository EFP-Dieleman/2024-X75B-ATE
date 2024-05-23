<?php

$record = [];
$title = 'Create a tag';

if (isset($_GET['id'])) {
    $sql = 'SELECT id, label FROM tag WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $record = $stmt->fetch();
    $title = 'Edit tag';
}

?>

<h1><?= $title ?></h1>
<form action="tag/save.php" method="POST">
    <input type="hidden" name="id" value="<?= $record['id'] ?>">
    <label for="label">Label</label>
    <input type="text" name="label" value="<?= $record['label']; ?>">
    <button>Save</button>
</form>