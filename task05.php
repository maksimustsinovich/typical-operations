<?php
$array = [
    [1, 2.34, 'hello'],
    [3.14, 4, 'world'],
    ['foo', 5.67, 6]
];

function process_array($array) {
    foreach ($array as &$value) {
        if (is_array($value)) {
            $value = process_array($value);
        } elseif (is_int($value)) {
            $value *= 2;
        } elseif (is_float($value)) {
            $value = round($value, 2);
        } elseif (is_string($value)) {
            $value = strtoupper($value);
        }
    }
    return $array;
}

$array = process_array($array);

print_r($array);
?>
