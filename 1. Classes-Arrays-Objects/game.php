<?php
class Blackjack {
    public $starthand;
    public $newCard;
    public $newValue;


    public function setStarthand(){
        global $starthand;
        return $starthand = mt_rand(1,11);
    }

    public function hit(){
        global $starthand;
        global $newCard;
        global $newValue;
        $newCard = mt_rand(1, 11);
        $newValue = $starthand + $newCard;
        $starthand = $newValue;
    }

    public function stand(){
        global $newValue;
        if($newValue==21) {
            return  "<h1>BLACKJACK!</h1>";
        }elseif($newValue<=21){
            return "You Won!";
        }
        else{
            return  "You Lost!";
        }

    }



}
$gameObjectt = new Blackjack();

echo $gameObjectt->setStarthand();
echo "<br>";
echo $gameObjectt->hit();
echo "The new card is: ".$newCard." and the new total value is ".$newValue;
echo "<br>";
echo $gameObjectt->hit();
echo "The new card is: ".$newCard." and the new total value is ".$newValue;
echo "<br>";
echo $gameObjectt->stand();
echo "<br>";
