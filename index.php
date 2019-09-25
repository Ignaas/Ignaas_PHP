<?php

$x = rand(0, 20);

function is_prime($x) {
    $i = 2;

    while ($i <= $x) {
        if ($x % $i == 0) {
            break;
            return false;
        } else {
            $i++;
        }
    }
    if ($x == $i && $x % 2 != 0 && $x % 3 != 0) {
        return true;
    }
}

$h1_text = "$x " . (is_prime($x) ? 'yra' : 'nėra') . ' pirminis sk.';

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1><?php print $h1_text; ?></h1>
    </body>
</html>