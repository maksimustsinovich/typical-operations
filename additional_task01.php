<?php
$array = [
    [100, 2, 3, 100],
    [4, 5, 6, 7],
    [100, 8, 9, 10],
    [11, 12, 13, 100]
];

function remove_duplicates($array) {
    $unique = [];

    foreach ($array as &$value) {
        if (is_array($value)) {
            $value = remove_duplicates($value);
        }
        if (!in_array($value, $unique)) {
            $unique[] = $value;
        }
    }
    return $unique;
}

$array = remove_duplicates($array);

print_r($array);
?>
