<?php

$grikiai = 5000;
$grikiai_init = $grikiai;
$days = 0;

for (; $grikiai > 0; $days++) {
    $per_day = rand(200, 550);
    if ($grikiai < $per_day) {
        break;
    } else {
        $grikiai -= $per_day;
    }
}

$data = date('Y-m-d', strtotime("+ $days day"));

$h2_text = "Rasta grikių: $grikiai_init g.";
$h3_text = "Išgyvensiu dar $days dienas, iki $data.";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #1</title>
    </head>
    <body>
        <h1>Kiek dienų galėsi valgyti grikius?</h1>
        <h2><?php print $h2_text; ?></h2>
        <h3><?php print $h3_text; ?></h3>
    </body>
</html>