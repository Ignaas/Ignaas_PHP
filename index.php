<?php

require './functions/html/generators.php';
require './functions/form/core.php';

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form',
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

$filtered_input = get_filtered_input($form);

if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
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