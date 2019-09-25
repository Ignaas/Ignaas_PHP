<?php

$x = 5;
$y = 2;

function sum($x, $y) {
    return $x + $y;
}

$h1_text = "$x ir $y suma: " . sum($x, $y);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php print($h1_text); ?></h1>
    </body>
</html>