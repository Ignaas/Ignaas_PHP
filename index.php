<?php

$x = rand(0, 20);

function is_prime($x) {
    if ($x % 2 == 0 || $x % 3 == 0)
        return false;
    else {
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