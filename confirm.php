<?php
$floor = $_POST['floor'];
$room = $_POST['room'];

?>

<?php for ($i=1; $i<=$floor; $i++){ ?>
    <?php for ($v=1; $v<=$room; $v++){ ?>
        <?php echo $i.sprintf('%02d',$v).'<br>'; ?>
    <?php } ?>
<?php } ?>

