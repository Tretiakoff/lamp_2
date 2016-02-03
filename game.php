<?php

require_once("GameState.php");


session_start();
var_dump($_POST);

if (isset($_POST['reset'])) {
    unset($_SESSION['game_state']);
}

if (!isset($_SESSION['game_state'])) {
    $state = new GameState();
    $state->initialDeal();
    $_SESSION['game_state'] = $state;

} else {
    $state = $_SESSION['game_state'];

}










//SCENARIO 1
/*$deck = new Deck();
$deck->shuffle();
$bank = new Bank();
$bank->take($deck->deal(2));
//tire 2 cartes du deck, la banque les prends
while ($bank->getHandValue() < 17) {
    //tant que la banque a moins de 17, elle tire
    $bank->take($deck->deal(1));
}
if ($bank->getHandValue() > 21) {


    echo "La banque perd " . $bank->getHandValue();

} else {
    echo "La banque a " . $bank->getHandValue();
}


$player = new Player('Belette');
$player->take($deck->deal(2));
echo "<br>";
echo "Vous avez " . $player->getHandValue();

*/









