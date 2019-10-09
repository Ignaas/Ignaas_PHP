<?php

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form',
    ],
    'fields' => [
        'first-name' => [
            'label' => 'Vardas',
            'type' => 'text',
            'extras' => [
                'attr' => [
                    'placeholder' => 'NAME',
                ],
                'validate' => [
                    'validate_not_empty'
                ],
            ],
        ],
        'age' => [
            'label' => 'AGE ',
            'type' => 'number',
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your age',
                ],
                'validate' => [
                    'validate_is_number',
                    'validate_is_positive',
                    'validate_max_100'
                ],
            ],
        ],
        'gender' => [
            'label' => 'Dėmesio pasirinkite lytį:',
            'type' => 'select',
            'extra' => [
                'attr' => [
                    'placeholder' => 'WHAT?!',
                ],
                'validate' => [
                    'validate_not_empty',
                ],
            ],
            'options' => ['male' => 'vyras', 'female' => 'moteris', 'undefined' => 'kita'],
        ],
        'email' => [
            'label' => 'Įveskite el. paštą: ',
            'type' => 'text', // tam kad vykdytume validacija backe
            'extra' => [
                'attr' => [
                    'placeholder' => 'Enter your email',
                    'class' => '',
                ],
                'validate' => [
                    'validate_not_empty',
                    'validate_email'
                ],
            ],
        ],
        'number-x' => [
            'label' => 'Number-x',
            'type' => 'number',
            'extras' => [
                'attr' => [
                    'placeholder' => 'Type X value',
                ],
                'validate' => [
                    'validate_not_empty',
                    'validate_is_number',
                ],
            ],
        ],
        'number-y' => [
            'label' => 'Number-y',
            'type' => 'number',
            'extras' => [
                'attr' => [
                    'placeholder' => 'Type Y value',
                ],
                'validate' => [
                    'validate_not_empty',
                    'validate_is_number',
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

function form_success($filtered_input) {
    var_dump($filtered_input['number-x'] + $filtered_input['number-y']);
}

function form_fail() {
    var_dump('Klaida');
}

require './functions/html/generators.php';
require './functions/form/core.php';

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
}


var_dump($form);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>