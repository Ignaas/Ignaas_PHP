<?php

$siukslines_turis = 40;
$siuskliu_turis_per_d = 15;
$max_kaupo_turis = rand($siukslines_turis, $siukslines_turis + rand(1, 15));
$current_siuksles = 0;
$available_days = 0;
while ($current_siuksles <= $max_kaupo_turis) {
    $current_siuksles += $siuskliu_turis_per_d;
    $available_days++;
}
$deadline = date('Y-m-d', strtotime("+ $available_days day"));

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #4</title>
    </head>
    <body>
        Po <?php print $available_days; ?> dienų (<?php print $deadline; ?>) pirk gėlių ir <br>
        šampano, jeigu nori išvengti <br>
        konflikto.
    </body>
</html>