<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

$situacija = 'Situacija: ';
if ($grizai_velai) {
    $situacija .= 'Grįžai vėlai';
    if ($grizai_isgeres) {
        $situacija .= ' ir išgėręs';
    }
} elseif ($grizai_isgeres) {
    $situacija .= 'Grįžai išgėręs';
} else {
    $situacija .= 'Nieko nepadarei';
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #3</title>
    </head>
    <body>
        <h1>Buitinė skaičiuoklė</h1>
        <h2>
            <?php print $situacija; ?>
        </h2>
    </body>
</html>