<?php

$form = [
    'attr' => [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form',
    ],
    'fields' => [
        'firstname' => [
            'attr' => [
                'type' => 'text',
            ],
            'extras' => [
                'attr' => [
                    'placeholder' => 'FIRSTNAME',
                ],
            ],
            'label' => 'Vardas',
            'error' => 'Klaida: nėra vardo',
        ],
        'lastname' => [
            'attr' => [
                'type' => 'text',
            ],
            'error' => 'Klaida: nėra pavardės',
        ],
        'gender' => [
            'attr' => [
                'type' => 'select',
                'value' => 'male',
            ],
            'extra' => [
                'attr' => [
                    'id' => 'gender',
                ],
            ],
            'options' => [
                'male' => 'Vyras',
                'female' => 'Moteris',
                'others' => 'Kiti',
            ],
            'label' => 'Dėmesio: pasirinkite lyti',
        ],
    ],
    'buttons' => [
        'enter' =>
        [
            'type' => 'submit',
            'text' => 'iveskite',
        ],
    ],
    'message' => 'Message!!!!!!!!!',
];

function html_attr($attribute) {
    $html_attr_array = [];

    foreach ($attribute as $attribute_key => $attribute_value) {
        $html_attr_array[] = strtr('@key="@value"', [
            '@key' => $attribute_key,
            '@value' => $attribute_value
        ]);
    }

    return implode(" ", $html_attr_array);
}

function get_filtered_input($form) {
    $filter_parameters = [];

    foreach ($form['fields'] as $field_id => $field) {
        $filter_parameters[$field_id] = FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $filter_parameters);
}

$input = get_filtered_input($form);

var_dump($_POST);
var_dump($input);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php require './templates/form.tpl.php'; ?>
    </body>
</html>