<?php
session_start();
// ARRAY
$array = array("Augustus", "Hadrianus", "Constantijn I", "Theodosius I ");

// Associative Array
$arrayAssociative = array(
    "periode" => array("Julisch-Claudische dynastie", "Antonijnse dynastie", "Constantinische dynastie", "Theodosiaanse dynastie" ),
    "keizer" => array("Augustus", "Hadrianus", "Constantijn I", "Theodosius I")
);
echo "<h3>Array: </h3>";
print_r($array);
echo "<h3>Associative Array: </h3>";
print_r($arrayAssociative);

// OBJECT
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

// FOR LOOP
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

// IF STATEMENT

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

echo "<h3>Saved changes in session: </h3>";
echo print_r($array, true );
echo "<br>";
echo print_r($arrayAssociative, true );
echo "<br>";
echo print_r($objectClass, true );




?>
