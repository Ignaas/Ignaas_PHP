<?php

$bank_report = [
    [
        name => 'IKI darbo užmokestis',
        amount => 600,
    ],
    [
        name => 'Kalvarijų Načnykas',
        amount => -15,
    ],
    [
        name => 'Pinigų išgryninimas Naugarduko g.',
        amount => -10000,
    ],
    [
        name => 'Pinigų išgryninimo mokestis',
        amount => -100000000,
    ],
];

foreach ($bank_report as $report) {
    if ($report['amount'] > 0) {
        $report['css_class'] = 'income';
    } else {
        $report['css_class'] = 'expense';
    }
}

?>