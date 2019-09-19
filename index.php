<?php

$daiktai = [
    [
        'name' => 'Kremas',
        'size' => 20,
    ],
    [
        'name' => 'Bananas',
        'size' => 8,
    ],
    [
        'name' => 'Piniginė',
        'size' => 10,
    ],
    [
        'name' => '20 e kupiūra',
        'size' => 0.4,
    ],
    [
        'name' => '50 e kupiūra',
        'size' => 0.5,
    ],
];

$rankinukas = [];

for ($i = 0; $i <= rand(0, rand(1, rand(0, rand(1, 80)))); $i++) {
    $rankinukas[] = $daiktai[rand(0, count($daiktai) - 1)];
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP Array namu darbai</title>
    </head>
    <body>
        <h1>Ką moteris turi rankinuke?</h1>
        <ul>
            <?php foreach ($rankinukas as $daiktas): ?>
                <li><?php print $daiktas['name'] . ' užima ' . $daiktas['size'] . 'cm3.'; ?></li>
            <?php endforeach; ?>
        </ul>

    </body>
</html>