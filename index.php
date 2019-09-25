<?php

$x = rand(0, 20);

function is_prime($x) {
    for ($i = 2; $i <= $x; $i++) {
        if ($x % $i == 0) {
            return false;
            break;
        } else
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