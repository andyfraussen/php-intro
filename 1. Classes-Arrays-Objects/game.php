<?php

/*
 * object has to give the player a starting hand
 * the hand can be hit with a new card
 *
 * the object has to store the hand and valuate the hand against the dealers hand (same object)
 * blackjack rules, score has to be kept
 *
 * if the player hit more then 21, he should surrender or lose the game
 */


class Blackjack {
    public $score = 0;
    public $newCard = 0;
    var $turn = true;

    public function setStarthand(){
        $hand  = rand(1, 11);
        $this->score = $this->score + $hand;
    }

    public function hit()
    {
        $this->newCard  = rand(1, 11);
        $this->score = $this->score + $this->newCard;

    }

    public function stand(){
        $this->turn = false;
    }

    public function surrender(){
        $this->turn = false;
    }

}


$player = new Blackjack();
$dealer = new Blackjack();
?>
