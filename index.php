<?php

$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

for ($i = 0; $i < $kates; $i++) {
    for ($j = 0; $j < $sunys; $j++) {
        if (rand(0, 1)) {
            $katasuniai++;
            break;
        } else {
            continue;
        }
    }
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #2</title>
    </head>
    <body>
        <h1>Katašunių Išeiga</h1>
        <h2>Dalyvavo <?php print $kates; ?> katės ir <?php print $sunys; ?> šunys</h2>
        <h3>Katašunių išeiga: <?php print $katasuniai ?></h3>
    </body>
</html>