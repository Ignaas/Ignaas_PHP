<?php

$months = 12;
$wallet = 1000;
$month_income = 700;

for ($i = 1; $i <= $months; $i++) {
    $month_expenses = rand(100, 1500);
    $wallet += $month_income - $month_expenses;

    if ($wallet < 0) {
        $h2_forecast = "Atsargiai, $i mėnesį gali baigtis pinigai!";
        break;
    } else {
        $h2_forecast = "Po $months m., prognozuojamas likutis: $wallet";
    }
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #4</title>
    </head>
    <body>
        <h1>Wallet forecast</h1>
        <h2><?php print $h2_forecast; ?></h2>
    </body>
</html>