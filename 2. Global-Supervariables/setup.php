<?php
session_start();
if(isset($_POST['click'])) {
    $_POST["tvshows"] = array("Sherlock", "Game of Thrones", "Mindhunter", "Legion", "True Detective");
    $_POST["movies"] = array("2001 A Space Odyssey", "Suspiria", "Pulp Fiction", "Hereditary", "Frances Ha");
    $_GET['country'] = "South-Korea";
    $_GET['worstmovie'] = "Marvel Cinematic Universe";
    header('location: result.php');


    $_SESSION['tvpost'] = $_POST["tvshows"];
    $_SESSION['moviespost'] = $_POST["movies"];
    $_SESSION['countryget'] = $_GET['country'];
    $_SESSION['worstget'] = $_GET['worstmovie'];
}




?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
<input type="submit" name="click" value="click">
</form>

</body>
</html>
