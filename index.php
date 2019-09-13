<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);
$sofa = 'Nemiegosi ant sofos';

$situacija = 'Situacija: ';
if ($grizai_velai) {
    $situacija .= 'Grįžai vėlai';

    if ($grizai_isgeres) {
        $situacija .= ' ir išgėręs';
        $sofa = 'Miegosi ant sofos';
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
        <title>Užduotis #4</title>
    </head>
    <body>
        <h1>Buitinė skaičiuoklė</h1>
        <h2><?php print $situacija; ?></h2>
        <h3><?php print $sofa; ?></h3>
    </body>
</html>