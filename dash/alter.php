<?php

$record = [];

if(isset($_GET['id'])){
    $sql = 'SELECT id, label FROM category WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $record = $stmt->fetch();
}

?>


<form action="save.php" method="POST">
    <input type="hidden" name="id" value="<?=$record['id']?>">
    <label for="label">Label</label>
    <input type="text" name="label" value="<?= $record['label'];?>">
    <button>Save</button>
</form>
