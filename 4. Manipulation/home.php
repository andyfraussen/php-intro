<?php
session_start();
// ARRAY Create an array, an associative array and an object in home.php.
$array = array("Augustus", "Hadrianus", "Constantijn I", "Theodosius I ");

// Associative Array Create an array, an associative array and an object in home.php.
$arrayAssociative = array(
    "periode" => array("Julisch-Claudische dynastie", "Antonijnse dynastie", "Constantinische dynastie", "Theodosiaanse dynastie" ),
    "keizer" => array("Augustus", "Hadrianus", "Constantijn I", "Theodosius I")
);
echo "<h3>Array: </h3>";
print_r($array);
echo "<h3>Associative Array: </h3>";
print_r($arrayAssociative);

// OBJECT Create an array, an associative array and an object in home.php.
class Keizers {
    public $naam;
    public $periode;

    public function setNaam($par){
        $this->naam = $par;
    }

    public function getNaam(){
        echo $this->naam."<br>";
    }

    public function setPeriode($par){
        $this->periode = $par;
    }

    public function getPeriode(){
        echo $this->periode."<br>" ;
    }
}
$objectClass = new Keizers;
$objectClass->setNaam( "Nero" );
$objectClass->setPeriode( "Julisch-Claudische dynastie" );
echo "<h3>Object: </h3>";
$objectClass->getNaam();
$objectClass->getPeriode();

// FOR LOOP Write a for-loop that adds an item to all of the above.
$i=0;
for($i=0; $i<1; $i++)
{
    array_push($array, "Marcus Aurelius");
    array_push($arrayAssociative["periode"], "Tetrarchie");
    array_push($arrayAssociative["keizer"], "Diocletianus");
    $objectClass->setNaam( "Septimius Severus" );
    $objectClass->setPeriode( "Severische dynastie" );
}
echo "<h3>For Loop: </h3>";
echo "<p>Array: </p>";
print_r($array);
echo "<p>Associative Array: </p>";
print_r($arrayAssociative);
echo "<p>Object: </p>";
$objectClass->getNaam();
$objectClass->getPeriode();
echo "<br>";
// FOR LOOP Write a for-loop that loops over all of the above items a random number of times (5-20)
echo "For loop through array 5-15 times: ";
echo "<br>";
$randomX = random_int(5, 15);
for($i=0; $i<$randomX; $i++)
{
    foreach ($array as &$value) {
        echo $value."<br>";
    }
}


// IF STATEMENT Write an if-statement that has a 20% chance to edit a random item of one of the above.
// Put this if statement in a loop so every array/object has a random chance of having a random item changed
// Loop through the associative array adding all items to the object as key => value

$_SESSION['Array'] = $array;
$_SESSION['arrayAssociative '] = $arrayAssociative;
$_SESSION['Object'] = $objectClass;
echo "<h3>If Statement: </h3>";
$count = mt_rand(1, 10);
if($count <= 2)
{
    echo "<p>Change in Array</p>>";
    $array[2] = "Diocletianus";
    $_SESSION['Array'] = $array;
    print_r($array);

}elseif($count <= 4){
    echo "<p>Change in Associative Array</p>>";
    $arrayAssociative["periode"][2] = "Julisch-Claudische dynastie";
    $arrayAssociative["keizer"][2] = "Nero";
    $_SESSION['arrayAssociative '] = $arrayAssociative;
    print_r($arrayAssociative);
}elseif($count <= 6){
    echo "<p>Change in Object</p>>";
    $objectClass->setNaam( "Diocletianus" );
    $objectClass->setPeriode( "Tetrarchie" );
    $_SESSION['Object'] = $objectClass;
    $objectClass->getNaam();
    $objectClass->getPeriode();
}
else
{

    echo "<p>History will prevail!</p>";

}

echo "<h3>Array manipulation: </h3>";

//Divide the array in half (if uneven items half-1, unless half-1 makes it empty)
echo "Divide the array in half: ";
echo "<br>";
$arrayhalf = array_chunk($array, 2);
print_r($arrayhalf);
//Remove the last item of the associative array
echo "<br>";
echo "Add the arrays to the object as arr1 and arr2: ";
echo "<br>";
$objectClass->arr1 = $array;
$objectClass->arr2 = $arrayAssociative;
echo "<pre>";
print_r($objectClass);
echo "</pre>";

echo "<h3>Saved changes in cookie: </h3>";
//Serialize to put to Cookie

$cookieKeizers = serialize($objectClass);

//Store to Cookie
echo "serialized";
$_COOKIE['keizers'] = $cookieKeizers;
echo "<pre>";
print_r($_COOKIE['keizers']);
echo "</pre>";
//unserialize to print
echo "unserialized";
$cookie =  unserialize($_COOKIE['keizers']);
echo "<pre>";
print_r($cookie);
echo "</pre>";


//echo "<h3>Saved changes in session: </h3>";
//echo print_r($array, true );
//echo "<br>";
//echo print_r($arrayAssociative, true );
//echo "<br>";
//echo print_r($objectClass, true );
//echo "<br>";
