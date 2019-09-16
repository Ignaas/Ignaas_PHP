<?php

$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

for ($i = 0; $i < $kates; $i++) {
    for ($j = 0; $j < $sunys; $j++) {
        $pavyko = rand(0, 1);
        if ($pavyko) {
            $katasuniai++;
            break;
        }
    }
}

$dalyviai = "Dalyvavo $kates katės ir $sunys šunys";
$iseiga = "Katašunių išeiga: $katasuniai";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #2</title>
    </head>
    <body>
        <h1>Katašunių Išeiga</h1>
        <h2><?php print $dalyviai; ?></h2>
        <h3><?php print $iseiga; ?></h3>
    </body>
</html>