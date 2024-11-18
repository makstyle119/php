<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'mak');
    define('DB_PASS', 'pass');
    define('DB_NAME', 'php_feedback_course');
    
    // Crete a new instance
    $conn = new mysqli(
        DB_HOST,
        DB_USER,
        DB_PASS,
        DB_NAME
    );

    // check the connection
    if ($conn->connect_error) {
        die('Connection failed' . $conn->connect_error);
    }

    // echo 'Connected!';
?>