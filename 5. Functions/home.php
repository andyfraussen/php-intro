<?php
require "security.php";
include "functions.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions</title>
    <style>

        body{
            min-height: 100vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
            background: snow;
        }

        .box{
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: column;
            margin: 2px;
            min-height: 25vh;
            min-width: 20vw;
            background: rgba(222,22,22,0.2);
            text-align: center;
        }
        input{
            width: 10vw;
        }
        form{
            display: flex;
        }


    </style>
</head>
<body>

    <div class="canvas">
    <form action="" method="get">
        <div class="box">
            <h3>Get a nickname</h3>
            <input type="text" name="name" placeholder="nickname">
            <input type="submit" name="nameSubmit">
            <?php
            $funcName = nickname_generate();
            ?>

        </div>
        <div class="box">
            <h3>Generate object</h3>
            <input type="submit" name="genSubmit">
            <?php
            $objGen = object_generate();
            ?>
        </div>
        <div class="box">
            <h3>Revert object</h3>
            <input type="submit" name="revertSubmit">
            <?php
            $objRev = object_revert();
            ?>
        </div>
    </form>

    </div>


</body>
</html>
