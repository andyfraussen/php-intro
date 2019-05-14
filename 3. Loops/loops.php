<?php



$tvshows = [
    ["tv-show" => "Sherlock", "rating" => 4, "link" => "<a href=https://www.imdb.com/title/tt1475582/>click!</a>"],
    ["tv-show" => "Game of Thrones", "rating" => 3, "link" => "<a href=https://www.imdb.com/title/tt0944947/>click!</a>"],
    ["tv-show" => "Mindhunter", "rating" => 4, "link" => "<a href=https://www.imdb.com/title/tt5290382/>click!</a>"],
    ["tv-show" => "Legion", "rating" => 5, "link" => "<a href=https://www.imdb.com/title/tt5114356/>click!</a>"],
    ["tv-show" => "True Detective", "rating" => 5, "link" => "<a href=https://www.imdb.com/title/tt2356777/>click!</a>"]
];

$star = "<img src='http://www.webweaver.nu/clipart/img/nature/planets/smiling-gold-star.png' alt='star' height='42' width='42'>";
$x=0;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>
</head>
<body>
<?php foreach($tvshows as $arr): ?>
    <tr>
        <td><?php echo "<br>".$arr["tv-show"]; ?></td>
        <td><?php //echo "Score: ".$arr["rating"];

            for($i=0; $tvshows[$x]["rating"]>$i; $i++){
                echo $star;
            }
            $x++;

            ?></td>
        <td><?php echo "IMDB: ".$arr["link"]; ?></td>
    </tr>
    <?php endforeach; ?>
</body>
</html>

