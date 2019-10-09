<?php

require './functions/html/generators.php';
require './functions/form/core.php';

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
    ],
    'fields' => [
        'nickname' => [
            'label' => 'Nickvardas:',
            'type' => 'text',
            'extras' => [
                'attr' => [
                    'placeholder' => 'Įveskite nicko vardą',
                ],
                'validate' => [
                    'validate_not_empty',
                ],
            ],
        ],
        'password' => [
            'label' => 'Slaptažodis:',
            'type' => 'password',
            'extras' => [
                'attr' => [
                    'placeholder' => 'Type password value',
                ],
                'validate' => [
                    'validate_not_empty',
                    'validate_password',
                ],
            ],
        ],
    ],
    'buttons' => [
        'submit' => [
            'type' => 'submit',
        ],
    ],
    'callbacks' => [
        'success' => 'form_success',
        'fail' => 'form_fail',
    ],
];

function form_success() {
    var_dump('You in!');
}

function form_fail() {
    var_dump('Retard alert!');
}

function array_to_file($array, $file) {
    if (is_array($array)) {
        $data_written = file_put_contents($file, json_encode($array));

        if ($data_written === false) {
            return false;
        } elseif ($data_written == 0) {
            return true;
        } else {
            return true;
        }
    } else {
        return false;
    }
}

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
    array_to_file($filtered_input, './data/db.txt'); // vienas funkcijos pavyzdys
}

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>