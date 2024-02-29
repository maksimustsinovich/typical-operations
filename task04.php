<?php
if (isset($_REQUEST['string'])) {
    $string = $_REQUEST['string'];
    if (!empty($string)) {
        $words = explode(' ', $string);
        $words = array_reverse($words);
        $new_string = implode(' ', $words);
        echo $new_string;
    } else {
        echo 'The string cannot be empty';
    }
} else {
    echo 'You need to pass the parameter string in the POST or GET request';
}
?>
