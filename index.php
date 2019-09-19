<?php

$days = [
    1 => 'Pirmadienis',
    2 => 'Antradienis',
    3 => 'Trečiadienis',
    4 => 'Ketvirtadienis',
    5 => 'Penktadienis',
    6 => 'Šeštadienis',
    7 => 'Sekmadienis',
];

$days[5] = 'Blackout';
unset($days[5]);

var_dump($days);

?>