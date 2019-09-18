<?php

$array = [];
$timestamp = strtotime('next Monday');
$work_start = 8;
$work_end = 16;

for ($i = 1; $i <= 7; $i++) {
    $weekday = date('l', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);

    if ($weekday === 'Sunday') {
        $array[$weekday] = 'Sunday Service';
    } elseif ($weekday === 'Saturday') {
        $array[$weekday] = 'Weekend';
    } else {
        for ($y = 1; $y <= 24; $y++) {
            if ($y >= $work_start && $y <= $work_end) {
                $array[$weekday][$y] = 'work hour';
            } else {
                $array[$weekday][$y] = 'freetime';
            }
        }
    }
}

var_dump($array);

?>