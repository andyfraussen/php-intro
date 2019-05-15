<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manipulation</title>
</head>
<body>
<form action="nickname.php" method="get" name="Cool NickName Generator">


    <input type="text" name="name" placeholder="enter nickname here">
    <input type="submit" name="submit" value="Submit">

</form>
</body>
</html>

<?php
if(isset($_GET['submit'])) {

    /*echo "Nickname: ".$_GET['name'];
    $name = explode(', ', $_GET['name']);
    var_dump($name);
    echo "<br>";
    echo "Turn the name around: ".strrev($name[0]);
    echo "<br>";
    echo "Capitalize it: ".strtoupper($name[0]);
    echo "<br>";
    array_unshift($name,"--");
    echo "Add -- to the front and back of the name: ".$name[0].$name[1];*/

    echo "Nickname: " . $_GET['name'];
    $name = $_GET['name'];
    echo "<br>";
    $name = strrev($name);
    echo "Turn the name around: " . $name;
    echo "<br>";
    echo "Capitalize it: " . strtoupper($name);
    echo "<br>";
    $name = strrev($name);
    echo "Turn the name back around: " . $name;
    echo "<br>";
    $name .= "--";
    echo "Add -- to the front and back of the name: " . "--" . $name;
    echo "Add x to the front of the name: " . "x" . $name;
    echo "<br>";
//    $chars = "azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN0123456789";
//    $random = $chars[rand(0,strlen($chars))];
    $twofour = random_int(2, 4);
    $random = substr(uniqid(''), -$twofour);
    echo "Add two to four random characters (A-Z, a-z, 0-9) in front of the name: " .$random.$name;
    $namelength = strlen($name);
    $toUpper = 2;
    $nametolower = strtolower($name);
    for ($x = 0; $x < $toUpper; $x++) {
        $pos = random_int(0, $namelength - 1);
        $name[$pos] = strtoupper($name[$pos]);
    }
    echo "<br>";
    echo "Capitalize one more random character in the name: ".$name;

//    $namelength = strlen($name);
//    $toUpper = random_int(1, $namelength-1);
//    for ($x = 0; $x > 10; $x++) {
//        $pos = random_int(0, $namelength - 1);
//        $name[$pos] = "<span color: green>".$name[$pos]."</span>";
//    }
//
//    echo "<br>";
//    echo "Give the nickname a gradient by wrapping each letter in a span with a different color style attribute to it: ".$name;
//

}
?>

