<?php
require_once("Card.php");
require_once("Deck.php");
require_once("Player.php");
require_once("Bank.php");
class GameState
{

    public $player;
    public $bank;
    public $deck;

    public function __construct()
    {
        $this -> player = new Player("coucou");
        $this -> bank = new Bank();
        $this -> deck = new Deck();
    }

    public function initialDeal(){
        var_dump("coucou");
        $this->deck->shuffle();
        $this ->bank ->take($this->deck->deal(2));
        $this ->player ->take($this->deck->deal(2));

    }
}