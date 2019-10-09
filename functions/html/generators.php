<?php

function html_attr($array) {
    $container_array = [];

    foreach ($array as $key => $value) {
        $container_array[] = strtr('@key="@value"', [
            '@key' => $key,
            '@value' => $value,
        ]);
    }
    return implode(' ', $container_array);
}

function array_to_file($array, $file) {
    if (is_array($array)) {
        file_put_contents($file, json_encode($array));
        return true;
    } else {
        return false;
    }
}
