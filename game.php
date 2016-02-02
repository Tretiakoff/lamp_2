<?php

require_once ("Bank.php");
require_once ("Card.php");
require_once ("Deck.php");
require_once ("Player.php");


//SCENARIO 1
$deck = new Deck();
$deck->shuffle();
$bank = new Bank();
$bank->take($deck->deal(2));
//tire 2 cartes du deck, la banque les prends
while( $bank->getHandValue() < 17){
    //tant que la banque a moins de 17, elle tire
    $bank->take($deck->deal(1));
}
if($bank->getHandValue() > 21){
    echo "La banque perd ".$bank->getHandValue();
}else{
    echo "La banque a ".$bank->getHandValue();
}


$player = new Player();
$player ->take($deck ->deal(2));
echo"<br>";
echo "Vous avez ".$player ->getHandValue();
$myChoice = $_POST['choice'];
if($myChoice == 'yes')
{
    $player ->take($deck ->deal(1));
}






