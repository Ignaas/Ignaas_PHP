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
//            'filter' => FILTER_SANITIZE_NUMBER_FLOAT,
        ],
        'lastname' => [
            'attr' => [
                'type' => 'text',
            ],
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
        $filter_parameters[$field_id] = $field['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS;
    }

    return filter_input_array(INPUT_POST, $filter_parameters);
}

$inputs = get_filtered_input($form);

foreach ($form['fields'] as $field_id => &$field) {
    $field['attr']['value'] = $inputs[$field_id];

    if ($inputs[$field_id] === '') {
        $field['error'] = 'Klaidos stringas';
    }

    unset($field);
}

var_dump($_POST);
var_dump($inputs);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php require './templates/form.tpl.php'; ?>
    </body>
</html>