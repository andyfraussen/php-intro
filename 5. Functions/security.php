<?php

if ($selection == 1)
{
    header('location: home.php?welcomehuman');
    die();
}else if($selection == 0){
    header('location: security.php?goawayrobot');
    die();
}else{
    echo "<h1>answer the damn question!</h1>";
}

$selection=$_POST["option"];

echo "
<h2>Are you a human?</h2>
<form method='post'>
<input name='option' id='newsletter' type='radio' value=1>Yes 
<input name='option' id='newsletter' type='radio' value=0>No
<input type='submit'>
</form>";

if ($selection ==1) {
    echo "Welcome human";
} else {
    echo "Only humans can go past this point!";
}