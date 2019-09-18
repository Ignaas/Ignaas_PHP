<?php

$array = [];
$timestamp = strtotime('next Monday');

for ($i = 1; $i <= 7; $i++) {
    $array[$i] = date('l', $timestamp);
    $timestamp = strtotime('+1 day', $timestamp);
    if ($array[$i] === 'Saturday' || $array[$i] === 'Sunday') {
        $array[$i] = 'Weekend';
    }
}

var_dump($array);

?>