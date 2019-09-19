<?php

$zodziai = [
    'ey', 'skomantas', 'baras',
    'Gvidas Ojeras', 'gudeliunas', 'vegetarian',
    'legislature', 'temple',
];
$rasinys = '';

for ($i = 0; $i <= rand(0, rand(1, 500)); $i++) {
    $rasinys .= $zodziai[rand(0, count($zodziai) - 1)] . ' ';
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Array namu darbai</title>
    </head>
    <body>
        <h1>Lietuvių Egzaminas</h1>
        <p><?php print $rasinys; ?></p>

    </body>
</html>