<?php

$bank_report = [
    [
        'name' => 'IKI darbo užmokestis',
        'amount' => 600,
    ],
    [
        'name' => 'Kalvarijų Načnykas',
        'amount' => -15,
    ],
    [
        'name' => 'Pinigų išgryninimas Naugarduko g.',
        'amount' => -10000,
    ],
    [
        'name' => 'Pinigų išgryninimo mokestis',
        'amount' => -100000000,
    ],
];

foreach ($bank_report as $key => $value) {
    foreach ($value as $item) {
        if ($value['amount'] > 0) {
            $bank_report[$key]['css_class'] = 'income';
        } else {
            $bank_report[$key]['css_class'] = 'expense';
        }
    }
}

var_dump($bank_report);

?>