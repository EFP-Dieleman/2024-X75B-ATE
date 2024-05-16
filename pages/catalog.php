<?php
$sql = 'SELECT * FROM item ORDER BY price DESC';
$stmt = $pdo->query($sql);

$items = $stmt->fetchAll();


$images = [];
// open current directory
$dir = 'public/poster';

$directories = scandir($dir);
var_dump($directories);
foreach($directories as $directory){
    
    if($directory == '.' || $directory == '..'){
        continue;
    }

    $files = scandir($dir . '/' . $directory);
    foreach($files as $file){
        if($file == '.' || $file == '..'){
            continue;
        }
        $images[$directory][] = $file;
    }
}


?>

<section>


    <?php 
    for($i=0; $i<count($items); ++$i){
        $result = $items[$i];
        $item_id = $result['id'];

    ?>
    <article class="catalog">
        <img src="public/poster/<?= $item_id?>/<?=$images[$item_id][0]?>" alt="Photo d'un item">
        <div>
            <strong><?= $result['label']?></strong>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut saepe incidunt perspiciatis repellendus quam
                ratione tenetur dignissimos enim eius, laboriosam obcaecati officia soluta cupiditate minima placeat.
                Sapiente
                aliquam molestiae corporis?</p>
            <footer>
                <button>Review</button>
                <span class="price"><?= $result['price']?></span>
                <button>Buy</button>
            </footer>
        </div>
    </article>
    <?php
    }
    ?>


</section>