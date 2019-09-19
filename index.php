<?php

$mano_atmintis = [
    'Ey', 'Skomantas', 'Baras',
    'Gvidas Ojeras', 'Gudeliunas', 'vegetarian',
    'legislature', 'temple',
];
$draugo_atmintis = [
    'We wasn\'t', 'supposed to', 'make it', 'past 25',
    'legislature', 'Ey', 'Skomantas', 'boom', 'temple',
];
$bendra_atmintis = [];

$mano_atmintis_count = count($mano_atmintis);
$draugo_atmintis_count = count($draugo_atmintis);

for ($i = 0; $i < $mano_atmintis_count; $i++) {
    for ($j = 0; $j < $draugo_atmintis_count; $j++) {
        if ($mano_atmintis[$i] === $draugo_atmintis[$j]) {
            $bendra_atmintis[] = $mano_atmintis[$i];
        }
    }
}

$count = count($mano_atmintis) - 1;
$id_random = rand(0, $count);
$rand_flashback = $mano_atmintis[$id_random];
$id_random++;

$h3_text = "Flashback #$id_random: $rand_flashback";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #3</title>
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
        <h2>Draugo atmintis</h2>
        <ul>
            <?php foreach ($draugo_atmintis as $mintis): ?>
                <li><?php print $mintis; ?></li>
            <?php endforeach; ?>
        </ul>
        <h3>
            <p>Sutapę prisiminimai</p>
            <ul>
                <?php foreach ($bendra_atmintis as $mintis): ?>
                    <li><?php print $mintis; ?></li>
                <?php endforeach; ?>
            </ul>
        </h3>
    </body>
</html>