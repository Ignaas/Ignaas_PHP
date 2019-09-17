<?php

$santaupos = 15000;
$months = 48;
$car_price_new = 30000;
$car_price_used = $car_price_new;
$depreciation = 2;
$depreciation_absolute = (100 - $depreciation) / 100;


for ($i = 1; $i <= $months; $i++) {
    $car_price_used *= $depreciation_absolute;

    if ($car_price_used <= $santaupos) {
        $months = $i;
        break;
    }
}

$depr_perc = intval((1 - $car_price_used / $car_price_new) * 100);
$car_price_used_int = intval($car_price_used);

$h2_text = "Naujos mašinos kaina: $car_price_new";
$h3_text = "Mašiną galėsi nusipirkti po $months mėn, kai jos vertė bus: $car_price_used_int eur.";
$h4_text = "Mašina nuvertės $depr_perc proc.";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #3</title>
    </head>
    <body>
        <h1>Kiek nuvertės mašina?</h1>
        <h2><?php print $h2_text; ?></h2>
        <h3><?php print $h3_text; ?></h3>
        <h4><?php print $h4_text; ?></h4>
    </body>
</html>