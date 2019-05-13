<?php
session_start();
print_r ($_SESSION['tvpost']);
echo "<br>";
print_r ($_SESSION['moviespost']);
echo "<br>";
print_r ($_SESSION['countryget']);
echo "<br>";
print_r ($_SESSION['worstget']);


foreach($_SESSION['moviespost'] as $key => $value){
    echo $value."<br>";
}

echo "<br>";

foreach($_SESSION['tvpost'] as $key => $value){
    echo $value;
    echo "<br>";
}

