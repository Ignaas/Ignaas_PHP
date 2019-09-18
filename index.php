<?php

$mano_atmintis = [
    'Ey', 'Skomantas', 'Baras',
    'Gvidas Ojeras', 'Gudeliunas', 'vegetarian',
    'legislature', 'temple'
];

$flashback_count = count($mano_atmintis);
$id_random = rand(0, ($flashback_count - 1));
$rand_flashback = $mano_atmintis[$id_random];
$id_random++;

$h3_text = "Flashback #$id_random: $rand_flashback";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #2</title>
    </head>
    <body>
        <h1>Kas buvo penktadienį?</h1>
        <h2>Ignas artimesnis atmintis</h2>
        <ul>
            <?php foreach ($mano_atmintis as $mintis): ?>
                <li><?php print $mintis; ?></li>
            <?php endforeach; ?>
        </ul>
        <h3><?php print $h3_text; ?></h3>
    </body>
</html>