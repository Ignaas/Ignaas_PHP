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
                    'class' => '',
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

function validate_not_empty($field_input, &$field) {
    if ($field_input === '') {
        $field['error'] = 'Laukas negali būti tuščias.';
    } else {
        return true;
    };
}

function validate_is_number($field_input, &$field) {
    if (!is_numeric($field_input) && !empty($field_input)) {
        $field['error'] = 'Lauke turi būti skaičius.';
    } else {
        return true;
    };
}

function validate_is_positive($field_input, &$field) {
    if ($field_input < 0) {
        $field['error'] = 'Lauke turi būti skaičius, didesnis už 0.';
    } else {
        return true;
    };
}

function validate_max_100($field_input, &$field) {
    if ($field_input > 100) {
        $field['error'] = 'Lauke turi būti skaičius, mažesnis nei 100.';
    } else {
        return true;
    };
}

function validate_email($field_input, &$field) {
    if (!strpos($field_input, '@') && !empty($field_input)) {
        $field['error'] = 'Neteisingas emailas';
    } else {
        return true;
    };
}

function form_success() {
    if (!empty($_POST)) {
        var_dump('success');
    }
}

function form_fail() {
    var_dump('Klaida');
}

function html_attr($array) {
    $container_array = [];
    foreach ($array as $key => $value) {
        $container_array[] = strtr('@key="@value"', [// @ skiriamasis zenklas
            '@key' => $key,
            '@value' => $value,
        ]);
    };
    return implode(' ', $container_array);
}

function get_filtered_input($array) {
    $filter_parameters = [];
    foreach ($array['fields'] as $idx => $inner_array) {
        $filter_parameters[$idx] = $inner_array['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS; // jei yra masivo filtras, ji naudoja, jei ne default sanitizas
    };
    return filter_input_array(INPUT_POST, $filter_parameters);
}

$filtered_input = get_filtered_input($form);

function validate_form($filtered_input, &$form) {
    $success = true;
    foreach ($form['fields'] as $field_id => &$field) {
        $field_input = $filtered_input[$field_id];
        $field['value'] = $field_input;
        foreach ($field['extra']['validate'] ?? [] as $validator) {
            $is_valid = $validator($field_input, $field); // kreipiamasi masyvo filtro masyvu kaip funkcijos vardu


            if (!$is_valid) {
                $success = false;
                break;
            }
        }


        unset($field);
    }
    //callbacks
    if ($success) {
        if (isset($form['callbacks']['success'])) {
            $form['callbacks']['success']($filtered_input, $form);
        }
    } else {
        if (isset($form['callbacks']['fail'])) {
            $form['callbacks']['fail']($filtered_input, $form);
        }
    }
    //callbacks
    return $success;
}

if (!empty($filtered_input)) {
    $success = validate_form($filtered_input, $form);
    if ($success) {
        var_dump($filtered_input['number-x'] + $filtered_input['number-y']);
    }
};

?>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php require 'templates/form.tpl.php'; ?>
    </body>
</html>