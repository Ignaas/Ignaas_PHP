<?php

require 'validators.php';

function get_filtered_input($array) {
    $filter_parameters = [];
    foreach ($array['fields'] as $idx => $inner_array) {
        $filter_parameters[$idx] = $inner_array['filter'] ?? FILTER_SANITIZE_SPECIAL_CHARS; // jei yra masivo filtras, ji naudoja, jei ne default sanitizas
    }

    return filter_input_array(INPUT_POST, $filter_parameters);
}

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

    return $success;
}
