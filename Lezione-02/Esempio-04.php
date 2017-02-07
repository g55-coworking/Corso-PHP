<?php
// SEZIONE 1: PHP

foreach($_GET as $c) {

    echo "--[" . $c . "]--";

}
?>


<form>

    <?php foreach(["a", "b", "c"] as $c) { ?>
        <input type="text" name="<?=$c?>">            
    <?php } ?>

    <input type="submit">

</form>
