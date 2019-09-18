<?php

$mano_atmintis = [
    'Ey',
    'Skomantas',
    'Baras',
    'Gvidas Ojeras',
    'Gudeliunas',
    'vegetarian',
    'legislature',
    'X-ray',
    'temple',
];

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #1</title>
    </head>
    <body>
        <h1>Kas buvo penktadienį?</h1>
        <h2>Ignas artimesnis - atmintis
            <ul>
                <?php foreach ($mano_atmintis as $reiksme): ?>
                    <li><?php print $reiksme; ?></li>
                <?php endforeach; ?>
            </ul>
        </h2>
    </body>
</html>