<?php

$bank_report = [
    [
        'operation_name' => 'IKI darbo užmokestis',
        'amount' => 600,
    ],
    [
        'operation_name' => 'Kalvarijų načnykas',
        'amount' => -15,
    ],
    [
        'operation_name' => 'Pinigų išgryninimas Naugarduko g.',
        'amount' => -10000,
    ],
    [
        'operation_name' => 'Pinigų išgryninimo mokestis',
        'amount' => -100000000,
    ],
];

$balance = 0;
$total_income = 0;
$total_expenses = 0;

foreach ($bank_report as $operation_idx => $operation) {
    $balance += $operation['amount'];
    if ($operation['amount'] > 0) {
        $bank_report[$operation_idx]['css_class'] = 'income';
        $total_income += $operation['amount'];
    } else {
        $bank_report[$operation_idx]['css_class'] = 'expense';
        $total_expenses += $operation['amount'];
    }
    $bank_report[$operation_idx]['text'] = "{$operation['operation_name']}: {$operation['amount']}";
}

$h2_text = "Balansas: $balance eur";
$h3_text_income = "Įplaukos: $total_income eur";
$h3_text_expenses = "Išlaidos: $total_expenses eur";

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP arrays examples</title>
        <style>
            .item {
                width: 50%;
            }
            .income {
                background-color: green;
            }
            .expense {
                background-color: red;
            }
        </style>
    </head>
    <body>
        <h1>Mano banko išklotinė</h1>
        <ul>
            <?php foreach ($bank_report as $operation): ?>
                <li class="item <?php print $operation['css_class']; ?>">
                    <?php print $operation['text']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <h2><?php print $h2_text; ?></h2>
        <h3><?php print $h3_text_income; ?></h3>
        <h3><?php print $h3_text_expenses; ?></h3>
    </body>
</html>