<?php
if (isset($_GET['text'])) {
    $text = $_GET['text'];
    if (!empty($text)) {
        $words = explode(' ', $text);
        $new_words = [];
        foreach ($words as $index => $word) {
            if (($index + 1) % 3 == 0) {
                $word = strtoupper($word);
            }
            $chars = str_split($word);
            foreach ($chars as $i => $char) {
                if (($i + 1) % 3 == 0) {
                    $char = "<span style='color: purple'>$char</span>";
                }
                $chars[$i] = $char;
            }
            $word = implode('', $chars);
            $new_words[$index] = $word;
        }
        $new_text = implode(' ', $new_words);
        echo $new_text;
    } else {
        echo 'The text cannot be empty';
    }
} else {
    echo 'You need to pass the parameter text in the GET request';
}
?>
