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

function form_success($current_input) {
    $db_path = './data/db.txt';
    $db_array = file_to_array($db_path);

    $db_array[] = $current_input;
    array_to_file($db_array, $db_path);

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
        } else {
            return false;
        }
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

if (file_to_array('./data/db.txt')) {
    $users_array = file_to_array('./data/db.txt');
} else {
    $users_array = [];
}

if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
//    var_dump(file_to_array($file_test));
}

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
        <table>
            <?php foreach ($users_array as $idx => $user): ?>
                <tr>
                    <td><?php print $idx; ?></td>
                    <td><?php print $user['nickname']; ?></td>
                    <td><?php print $user['password']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>