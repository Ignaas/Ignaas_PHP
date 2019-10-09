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
