<?php

define('DB_FILE', './data/db.txt');
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

function form_success($current_input) {
    $db_array = file_to_array(DB_FILE);
    $db_array[] = $current_input;

    foreach ($current_input as $input_idx => $input) {
        setcookie($input_idx, $input, time() + 3600, '/');
    }
    array_to_file($db_array, DB_FILE);

    var_dump('You in!');
    var_dump($db_array);
}

function form_fail() {
    var_dump('Retard alert!');
}

function array_to_file($array, $file) {
    if (is_array($array)) {
        $data_written = file_put_contents($file, json_encode($array));
        if ($data_written !== false) {
            return true;
        }

        return false;
    }

    return false;
}

function file_to_array($file) {
    if (file_exists($file)) {
        $data = file_get_contents($file);
        if ($data !== false) {
            return json_decode($data, true);
        }
    }

    return false;
}

$filtered_input = get_filtered_input($form);

if (file_to_array(DB_FILE)) {
    $users_array = file_to_array(DB_FILE);
} else {
    $users_array = [];
}

if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
}

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php if (empty($_COOKIE)) : ?>
            <?php require 'templates/form.tpl.php'; ?>
        <?php else: ?>
            <table>
                <?php foreach ($_COOKIE as $idx => $user): ?>
                    <tr>
                        <td><?php print $idx; ?></td>
                        <td><?php print $user; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </body>
</html>