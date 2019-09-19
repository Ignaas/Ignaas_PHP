<?php

$bank_report = [
    [
        'name' => 'IKI darbo užmokestis:',
        'amount' => 600,
    ],
    [
        'name' => 'Kalvarijų Načnykas:',
        'amount' => -15,
    ],
    [
        'name' => 'Pinigų išgryninimas Naugarduko g.:',
        'amount' => -10000,
    ],
    [
        'name' => 'Pinigų išgryninimo mokestis:',
        'amount' => -100000000,
    ],
];

foreach ($bank_report as $op_key => $operation) {
    if ($operation['amount'] > 0) {
        $bank_report[$op_key]['css_class'] = 'income';
    } else {
        $bank_report[$op_key]['css_class'] = 'expense';
    }
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Užduotis #2</title>
        <style>
            .income {color: green;}
            .expense {color: red;}
        </style>
    </head>
    <body>
        <h1>Banko ataskaita</h1>
        <ul>
            <?php foreach ($bank_report as $bank_key => $operation): ?>
                <li class="<?php print $bank_report[$bank_key]['css_class']; ?>">
                    <?php foreach ($operation as $op_key => $op_val): ?>
                        <?php if ($op_key !== 'css_class') print "$op_val"; ?>
                    <?php endforeach; ?>
                    <?php print ' eur'; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>