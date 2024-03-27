<?php
$titre = 'DragonBall Project';

ob_start();
?>
<p>liste des personnages</p>
<?php
foreach ($personnages->items as $item) {
    ?>
    <h1><?php echo $item->name;?></h1>
    <img src="<?php echo $item->image;?>" alt="<?php echo $item->name;?>">
    <p><?php echo $item->description;?></p>
    <a href="index.php/?page=download&name=<?=$item->name?>&description=<?=$item->description?>">download</a>
    <?php
    Kint::dump($item);
}
?>



?>
<?php
$content = ob_get_clean();

require('Views/BaseView.php');
