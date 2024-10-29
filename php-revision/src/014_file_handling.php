<?php

/* ---------- File Handling --------- */

/* 
    File handling is the ability to read and write files on the server.
    PHP has built in functions for reading and writing files.
*/

$file = 'some_path/users.txt';

if (file_exists($file))
{
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'MAK' . PHP_EOL . 'MARIA' . PHP_EOL  . 'ALI';
    fwrite($handle, $contents);
    fclose($handle);
}

?>