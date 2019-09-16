<?php

$days = 365;
$pack_price = 3.4;
$count_ttl = 0;

for ($i = 1; $i <= $days; $i++) {
    $cigs_mon_fri = rand(3, 4);
    $cigs_sat = rand(10, 20);
    $cigs_sun = rand(5, 6);

    $loop_date = date('N', $i);
    if ($loop_date == 7) {
        $count_ttl += $cigs_sun;
    } elseif ($loop_date == 6) {
        $count_ttl += $cigs_sat;
    } else {
        $count_ttl += $cigs_mon_fri;
    }
}

$price_ttl = $count_ttl * $pack_price;
$cig_maths = "Per $days dienas, surukysiu $count_ttl cigarečių už $price_ttl eur.";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #5</title>
    </head>
    <body>
        <h1>Mano dūmų skaičiuoklė</h1>
        <h2><?php print $cig_maths; ?></h2>
    </body>
</html>