<?php

$x = 5;
$y = 2;

function sum($x, $y) {
    return $x + $y;
}

$text = "$x ir $y suma:" . sum($x, $y);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php print($text); ?></h1>
    </body>
</html>