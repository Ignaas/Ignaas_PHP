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
        'email' => [
            'label' => 'El. pašas:',
            'type' => 'text',
            'extras' => [
                'attr' => [
                    'placeholder' => 'Įveskite el pašto adresą',
                ],
                'validate' => [
                    'validate_not_empty',
                    'validate_email',
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
    $data_array = file_to_array(DB_FILE);

    if ($data_array) {
        if (in_array($current_input['email'], $data_array) && in_array($current_input['password'], $data_array)) {
            session_start();
            setcookie('form_submitted', 'true', time() + 3600, '/');
            print 'Tu prisijungei: emailas:' . $current_input['email'];
        } elseif (in_array($current_input['email'], $data_array)) {
            print 'Tavo emailas kanalina bet slaptazodis ne';
        } else {
            $db_array = file_to_array(DB_FILE);
            $db_array[] = $current_input;
            array_to_file($db_array, DB_FILE);
        }
    } else {
        $db_array = file_to_array(DB_FILE);
        $db_array[] = $current_input;
        array_to_file($db_array, DB_FILE);
    }
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

function testfun() {
    echo "Your test function on button click is working";
    session_destroy();
}

if (array_key_exists('test', $_POST)) {
    testfun();
}

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php if (!isset($_SESSION)): ?>
            <?php require 'templates/form.tpl.php'; ?>
        <?php else: ?>
            <?php print 'Sveikinu prisijungus'; ?>
            <form method="post">
                <input type="submit" name="test" id="test" value="RUN" /><br/>
            </form>


        <?php endif; ?>
    </body>
</html>