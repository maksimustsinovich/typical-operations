<?php
if (isset($argv[1])) {
    $file_name = $argv[1];

    if (file_exists($file_name) && is_readable($file_name)) {
        $file_contents = file_get_contents($file_name);


        $lines = explode("\n", $file_contents);

        sort($lines);

        $new_file_contents = implode("\n", $lines);

        file_put_contents($file_name, $new_file_contents);

        echo "The file $file_name has been sorted alphabetically";
    } else {
        echo "The file $file_name does not exist or is not readable";
    }
} else {
    echo "You need to pass the file name as a command line argument";
}

