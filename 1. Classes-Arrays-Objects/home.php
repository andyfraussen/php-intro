<?php
$array = array("Augustus", "Hadrianus", "Constantijn I", "Theodosius I ");

$arrayAssociative = array(
    "periode" => array("Julisch-Claudische dynastie", "Antonijnse dynastie", "Constantinische dynastie", "Theodosiaanse dynastie" ),
    "keizer" => array("Augustus", "Hadrianus", "Constantijn I", "Theodosius I")
);
print_r($array);
echo "<br>";
print_r($arrayAssociative);
echo "<br>";

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
$objectClass->getNaam();
$objectClass->getPeriode();

$i=0;
for($i=0; $i<=1; $i++)
{
    array_push($array, "Diocletianus");
    array_push($arrayAssociative["periode"], "Tetrarchie");
    array_push($arrayAssociative["keizer"], "Diocletianus");
    $objectClass->setNaam( "Septimius Severus" );
    $objectClass->setPeriode( "Severische dynastie" );
}
echo "<br>";
print_r($array);
echo "<br>";
print_r($arrayAssociative);
echo "<br>";
$objectClass->getNaam();
$objectClass->getPeriode();
echo "<br>";
$count = mt_rand(1, 10);
if($count <= 2)
{
    $array[2] = "Diocletianus";
    print_r($array);

}elseif($count <= 4){
    $arrayAssociative["periode"][2] = "Tetrarchie";
    $arrayAssociative["keizer"][2] = "Diocletianus";
    print_r($arrayAssociative);
}elseif($count <= 6){
    $objectClass->setNaam( "Septimius Severus" );
    $objectClass->setPeriode( "Severische dynastie" );
    $objectClass->getNaam();
    $objectClass->getPeriode();
}
else
{
    echo "<br>";
    echo "History will prevail!";
    echo "<br>";
}

