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
            'validate' => [
                'validate_not_empty',
            ],
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
        'age' => [
            'attr' => [
                'type' => 'number',
            ],
            'extras' => [
                'attr' => [
                    'placeholder' => 'AGE',
                ],
            ],
            'label' => 'Amžius',
            'validate' => [
                'validate_not_empty',
                'validate_is_number',
                'validate_is_positive',
                'validate_max_100'
            ],
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

function validate_not_empty($field_input, &$field) {
    if (isset($field_input)) {
        if (empty($field_input)) {
            $field['error'] = "Laukas negali būti tusčias";
        }
    }
}

function validate_is_number($field_input, &$field) {
    if (isset($field_input)) {
        if (!is_numeric($field_input) && !empty($field_input)) {
            $field['error'] = "Laukas negali nenumerinis";
        }
    }
}

function validate_is_positive($field_input, &$field) {
    if (isset($field_input)) {
        if ($field_input < 0) {
            $field['error'] = "Laukas negali buti negatyvus";
        }
    }
}

function validate_max_100($field_input, &$field) {
    if (isset($field_input)) {
        if ($field_input >= 100) {
            $field['error'] = "Laukas negali didesnis už 100";
        }
    }
}

function validate_form(&$form) {
    $inputs = get_filtered_input($form);

    foreach ($form['fields'] as $field_id => &$field) {
        $field_input = $inputs[$field_id];
        $field['attr']['value'] = $field_input;

        foreach ($field['validate'] ?? [] as $validation) {
            $validation($field_input, $field);
        }
    }

    var_dump($inputs);
}

validate_form($form);

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php require './templates/form.tpl.php'; ?>
    </body>
</html>