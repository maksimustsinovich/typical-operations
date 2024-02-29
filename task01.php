<?php
if (isset($_GET['cities'])) {
    $cities = $_GET['cities'];
    if (!empty($cities)) {
        $cities = explode(',', $cities);
        $cities = array_map('trim', $cities);
        $cities = array_unique($cities);
        sort($cities);
        echo implode(', ', $cities);
    } else {
        echo 'The list of cities cannot be empty';
    }
} else {
    echo 'You need to pass the parameter cities in the GET request';
}
?>
