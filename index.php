<?php

$distance_km = rand(3, 180);
$consumption = 11;
$price_l = 0.503;
$my_money = 100;

$fuel_consump = $distance_km / $consumption;
$price_fuel = $fuel_consump * $price_l;
if ($my_money >= $price_fuel) {
    $affordable = 'įperkama';
} else {
    $affordable = 'neįperkama';
}

$distance = "Nuvažiuota distancija: $distance_km km.";
$fuel_total = "Sunaudota $fuel_consump l. kuro.";
$price_trip = "Kaina: $price_fuel euro valiutos pinigų.";
$my_moneyhtml = "Turimi pinigai: $my_money";
$kelione = "Išvada: Kelionė $affordable";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #2</title>
    </head>
    <body>
        <ul>
            <li><?php print $distance; ?></li>
            <li><?php print $fuel_total; ?></li>
            <li><?php print $price_trip; ?></li>
            <li><?php print $my_moneyhtml ?></li>
        </ul>
        <hr>
        <p>
            <?php print $kelione; ?>
        </p>
    </body>
</html>