<?php
//
//In your functions.php, create three functions:
//nickname_generate(), ask for the parameter nickname in it, and use this parameter to do what you did in the string manipulation exercise
//object_generate(), this does not take any parameters, but returns the object
//object_revert(), this function should either take the object from the previous function (object_generate()) if it's passed to it as a parameter or create the object at the start if it wasn't passed
//It should then do the following:
//it takes both halves of the original array out of the object and combines them back into one array
//    it takes all the properties that the associative array gave to the object and puts them back into the associative arrays
//make sure that all the things you just put back into their original forms, you also remove from the object
//it prints out an easy-to-read version of all items on the page

function nickname_generate()
{
    if (isset($_GET['nameSubmit'])) {
        $name = str_shuffle($_GET['name']);
        echo "<h2>".$name."</h2>";
        setcookie('word', $name, time()+60, '/');
    }

}

function object_generate()
{
    if (isset($_GET['genSubmit'])) {
        class objgen
        {


        }

        $objectClass = new objgen;
    }

}

function object_revert()
{
    if (isset($_GET['revertSubmit'])) {
        if ($objectClass = NULL) {

            class objgen
            {


            }

            $objectClass = new objgen;

            var_dump($objectClass);

        } else {

            class objgen
            {


            }

            $objectClass = new objgen;
            echo "object ok";
            $objectClass->arr1 = $_COOKIE['word'];;
            $objectClass->arr2 = $_COOKIE['word'];;
            var_dump($objectClass);


        }
    }

}
