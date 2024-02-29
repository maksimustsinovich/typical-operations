<?php
if (isset($_POST['set1']) && isset($_POST['set2'])) {
    $set1 = $_POST['set1'];
    $set2 = $_POST['set2'];
    if (!empty($set1) && !empty($set2)) {
        $set1 = explode(' ', $set1);
        $set2 = explode(' ', $set2);
        if (array_filter($set1, 'is_numeric') && array_filter($set2, 'is_numeric')) {
            $result = [];
            foreach ($set1 as $num) {
                $result[] = $num;
            }
            foreach ($set2 as $num) {
                if (!in_array($num, $set1)) {
                    $result[] = $num;
                }
            }
            echo implode(' ', $result);
        } else {
            echo 'The sets of numbers must contain only numbers';
        }
    } else {
        echo 'The sets of numbers cannot be empty';
    }
} else {
    echo 'You need to pass the parameters set1 and set2 in the POST request';
}
?>
