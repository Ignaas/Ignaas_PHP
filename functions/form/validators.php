<?php

function validate_not_empty($field_input, &$field) {
    if ($field_input === '') {
        $field['error'] = 'Laukas negali būti tuščias.';
    } else {
        return true;
    }
}

function validate_is_number($field_input, &$field) {
    if (!is_numeric($field_input) && !empty($field_input)) {
        $field['error'] = 'Lauke turi būti skaičius.';
    } else {
        return true;
    }
}

function validate_is_positive($field_input, &$field) {
    if ($field_input < 0) {
        $field['error'] = 'Lauke turi būti skaičius, didesnis už 0.';
    } else {
        return true;
    }
}

function validate_max_100($field_input, &$field) {
    if ($field_input > 100) {
        $field['error'] = 'Lauke turi būti skaičius, mažesnis nei 100.';
    } else {
        return true;
    }
}

function validate_email($field_input, &$field) {
    if (!strpos($field_input, '@') && !empty($field_input)) {
        $field['error'] = 'Neteisingas emailas';
    } else {
        return true;
    }
}

function validate_password($field_input, &$field) {
    if (strlen($field_input) <= 8) {
        $field['error'] = 'Slaptažodis turi būti ilgesnis nei 8 simboliai';
    } else {
        return true;
    }
}
