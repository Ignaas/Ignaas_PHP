<?php

$masyvas = [
    'kiesa500' => 'stringinis',
    1 => ['reiksme0', 'nemasyvas1', 'tekstas2', ['dar geriaurekursyvoblio']],
];

function print_array($array) {
    $output_array = [];

    foreach ($array as $keys => $values) {
        if (is_array($values)) {
            $output_array = array_merge($output_array, print_array($values));
        } else {
            $output_array[$keys] = $values;
        }
    }
    return $output_array;
}

print_array($masyvas);
print '<br><br><br>';
$viematmas = print_array($masyvas);
var_dump($viematmas);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>

    </body>
</html>
