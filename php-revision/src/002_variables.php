<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = "MAK"; // string
$age = 22; // int
$has_kids = false; // boolean
$has_on_hand = 100; // float

echo $name . "\t";
echo $age . "\t";
echo $has_kids . "\t";
echo $has_on_hand . "\t";

echo "<br />" . $name . ' is ' . $age . ' year old. and have ' . $has_on_hand . ' money'; // this is how you can do contact in php
echo "<br /> $name is $age year old. and have $has_on_hand money <br />"; // this is another way

$x = '5' + '5'; // php will still consider it as int;
var_dump($x);

echo "\t" . 10 - 5 . "\t";
echo 10 * 5 . "\t";
echo 10 / 5 . "\t";
echo 10 % 5 . "\t";

echo "<br />";

// constant
define('HOST', 'localhost'); // never change

echo HOST;
