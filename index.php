<?php

define('DB_FILE', './data/db.txt');
require './functions/file.php';
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
    setcookie('form_submitted', 'true', time() + 3600, '/');
    setcookie('user_id', rand(1000000, 9999999), time() + 3600, '/');


    $db_array = file_to_array(DB_FILE);
    $db_array[] = $current_input;

    array_to_file($db_array, DB_FILE);

    var_dump('You in!');
    var_dump($db_array);
}

function form_fail($form) {
    var_dump('Retard alert!');
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

setcookie('count', isset($_COOKIE['count']) ? ++$_COOKIE['count'] : $_COOKIE['count'] = 1, time() + 3600, '/');

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php if (isset($_COOKIE['user_id'])) : ?>
            <h1>User id: <?php print $_COOKIE['user_id'] ?? ''; ?></h1>
        <?php endif; ?>
        <h2>Apsilankymų skaičius: <?php print $_COOKIE['count'] ?? ''; ?></h2>
        <?php if (empty($_COOKIE['form_submitted'])) : require 'templates/form.tpl.php'; ?>
        <?php else: ?>
            <table>
                <?php foreach ($users_array as $idx => $user): ?>
                    <tr>
                        <td><?php print $idx; ?></td>
                        <td><?php print $user['nickname']; ?></td>
                        <td><?php print $user['password']; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
    </body>
</html>