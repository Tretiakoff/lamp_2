<?php
require_once "game.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h3>Vos cartes</h3>
<ul>

    <?php

    $hand = $state->player->getHand();
    var_dump($hand);
    foreach($hand as $card):
        ?>
        <li><?php echo $card;?></li>
        <?php
    endforeach;

    ?>
</ul>

<form method="POST">
    <h3>Une autre carte?</h3>
    <input type="radio" name="choice" value="yes" checked="checked">oui<br>
    <input type="radio" name="choice" value="no">non<br>
    <input type="radio" name="reset" value="reset">reset<br><br>
    <input type="submit" value="ok">
</form>

</body>
</html>