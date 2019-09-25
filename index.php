<?php

function slot_run($size) {
    $array = [];

    for ($i = 1; $i <= $size; $i++) {
        for ($j = 1; $j <= $size; $j++) {
            $array[$i][$j] = rand(0, 1);
        }
    }
    return $array;
}

$slots_machine = slot_run(rand(2, 6));

var_dump($slots_machine);
