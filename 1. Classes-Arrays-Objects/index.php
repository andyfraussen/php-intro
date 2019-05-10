<?php
require 'game.php';
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLACKJACK</title>
</head>
<body>
<h2><?php echo $_SESSION['message']; ?></h2>
<form action="" method="post">

    <input type='submit' name="start" value='Start'/>

    <input type="submit" name="hit" value='Hit'/>

    <input type="submit" name="stand" value='End Turn'/>

    <input type="submit" name="surrender" value='Surrender'/>

    <input type="submit" name="restart" value='restart'/>

</form>


<p>Your hand: <?php echo $_SESSION['player']->score?></p>
<p>Your new card: <?php echo $_SESSION['player']->newCard?></p>
<p>Dealer hand: <?php echo $_SESSION['dealer']->score?></p>


</body>
</html>

<?php
// SESSION START
if(!isset($_SESSION['player'])) {
    $_SESSION['player'] = $player;
    $_SESSION['dealer'] = $dealer;
    $_SESSION['message'] = $message;
}


// BUTTONS
if ($player->turn == true){
    $_SESSION['message'] = "Press START to start the game";
    if(isset($_POST['start']) && $_SESSION['player']->turn  == true){
        $_SESSION['player'] = $player;
        $_SESSION['dealer'] = $dealer;
        $player->setStarthand();
        $dealer->setStarthand();
        header('location: index.php?start');
        $_SESSION['message'] = "We dealt some cards, what are you going to do?";
    }

    if (isset($_POST['hit']) && $_SESSION['player']->turn == true) {
        $_SESSION['player']->hit();
        $_SESSION['message'] = "You took a ".$_SESSION['player']->newCard." do you need another card?";
        header('location: index.php?hit');
    }

    if(isset($_POST['stand'])){
        $_SESSION['player']->stand();
        if($_SESSION['dealer']->turn  == true){
            $_SESSION['dealer']->turn = false;
           do {
               $_SESSION['dealer']->hit();
           }
           while($_SESSION['dealer']->score < 15);
        }
        header('location: index.php?stand');
        };

    if(isset($_POST['surrender'])) {
        $_SESSION['player']->surrender();
        $_SESSION['player']->score=0;
        $_SESSION['dealer']->score=21;
        header('location: index.php?surrender');
    }
}
// RESET
if(isset($_POST['restart'])) {
   session_destroy();
    header('location: index.php?reset');
}

// MESSAGES
if($_SESSION['player']->score > 21) {
    $_SESSION['message'] = "Risky business, you lost!";
    $_SESSION['player']->turn = false;
}elseif($_SESSION['dealer']->score > 21) {
    $_SESSION['message'] = "The house took a gamble, you won!";
}elseif($_SESSION['player']->score == 21) {
    $_SESSION['message'] = "WINNER WINNER CHICKEN DINNER!";
}elseif($_SESSION['player']->turn == false && $_SESSION['dealer']->turn == false) {
    if($_SESSION['player']->score <= $_SESSION['dealer']->score){
        $_SESSION['message'] = "Dealer wins :(";
    } else {
        $_SESSION['message'] = "Player wins! :)";

    }
}



