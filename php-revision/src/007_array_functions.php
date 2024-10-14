<?php
/* --------- Array Functions -------- */

/*
    Functions to work with arrays
    https://www.php.net/manual/en/ref.array.php
*/

// array
$fruits = ['apple', 'orange', 'pear'];

echo "================================================== count start ==================================================" . "<br />" . "<br />";

echo count($fruits); // count array length

echo "<br />" . "<br />" . "================================================== count end ==================================================";
echo "<br />" . "<br />" . "================================================== search start ==================================================" . "<br />" . "<br />";

var_dump(in_array('apple', $fruits)); // search in array

echo "<br />" . "<br />" . "================================================== search end ==================================================";
echo "<br />" . "<br />" . "================================================== add in the array  start ==================================================" . "<br />" . "<br />";

$fruits[] = 'grape'; // add in the last

print_r($fruits);

echo "<br />" . "<br />" . "================================================== add in the array end ==================================================";
echo "<br />" . "<br />" . "================================================== array_push start ==================================================" . "<br />" . "<br />";

array_push($fruits, 'blueberry', 'strawberry'); // add in the last

print_r($fruits);

echo "<br />" . "<br />" . "================================================== array_push end ==================================================";
echo "<br />" . "<br />" . "================================================== array_unshift start ==================================================" . "<br />" . "<br />";

array_unshift($fruits, 'mango'); // add in the first

print_r($fruits);

echo "<br />" . "<br />" . "================================================== array_unshift end ==================================================";
echo "<br />" . "<br />" . "================================================== array_pop start ==================================================" . "<br />" . "<br />";

array_pop($fruits); // remove last

print_r($fruits);

echo "<br />" . "<br />" . "================================================== array_pop end ==================================================";
echo "<br />" . "<br />" . "================================================== array_shift start ==================================================" . "<br />" . "<br />";

array_shift($fruits); // remove first

print_r($fruits);

echo "<br />" . "<br />" . "================================================== array_shift end ==================================================";
echo "<br />" . "<br />" . "================================================== unset start ==================================================" . "<br />" . "<br />";

unset($fruits[2]); // remove by index and also the index

print_r($fruits);

echo "<br />" . "<br />" . "================================================== unset end ==================================================";
echo "<br />" . "<br />" . "================================================== split the array into n number - start ==================================================" . "<br />" . "<br />";

$chunked_array = array_chunk($fruits, 2); // second argument is the n

print_r($chunked_array);

echo "<br />" . "<br />" . "================================================== split the array into n number - end ==================================================";
echo "<br />" . "<br />" . "================================================== array merge start ==================================================" . "<br />" . "<br />";

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr3 = array_merge($arr1, $arr2); // merge two arrays

print_r($arr3);

echo "<br />" . "<br />" . "================================================== array merge end ==================================================";
echo "<br />" . "<br />" . "================================================== split operator start ==================================================" . "<br />" . "<br />";

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arr4 = [...$arr1, ...$arr2]; // merge two arrays

print_r($arr4);

echo "<br />" . "<br />" . "================================================== split operator end ==================================================";
echo "<br />" . "<br />" . "================================================== combine two array with key value pair - start ==================================================" . "<br />" . "<br />";

$color = ['green', 'red', 'yellow'];
$fruit = ['avocado', 'apple', 'banana'];

$combineColorAndFruitArray = array_combine($color, $fruit); // combine two arrays

print_r($combineColorAndFruitArray);

echo "<br />" . "<br />" . "================================================== combine two array with key value pair - end ==================================================";
echo "<br />" . "<br />" . "================================================== get only keys of an array - start ==================================================" . "<br />" . "<br />";

$keys = array_keys($combineColorAndFruitArray); // return keys of an array

print_r($keys);

echo "<br />" . "<br />" . "================================================== get only keys of an array - end ==================================================";
echo "<br />" . "<br />" . "================================================== flip the array - value become key and key become value - start ==================================================" . "<br />" . "<br />";

$flipped = array_flip($combineColorAndFruitArray); // flip the array

print_r($flipped);

echo "<br />" . "<br />" . "================================================== flip the array - value become key and key become value - end ==================================================";
echo "<br />" . "<br />" . "================================================== create a range from n to m - start ==================================================" . "<br />" . "<br />";

$numbersTillTwenty = range(0, 20); // make range in form of array

print_r($numbersTillTwenty);

echo "<br />" . "<br />" . "================================================== create a range from n to m - end ==================================================";
echo "<br />" . "<br />" . "================================================== create a range with adding more data in return - start ==================================================" . "<br />" . "<br />";

$numbersTillTwentyWithString = array_map(function($number) {
    return "Number $number";
}, $numbersTillTwenty); // run a map in the array

print_r($numbersTillTwentyWithString);

echo "<br />" . "<br />" . "================================================== create a range with adding more data in return - end ==================================================";
echo "<br />" . "<br />" . "================================================== filter start ==================================================" . "<br />" . "<br />";

$lessThenTen = array_filter($numbersTillTwenty, fn($number) => $number < 10); // run a map and return where condition match

print_r($lessThenTen);

echo "<br />" . "<br />" . "================================================== filter end ==================================================";
echo "<br />" . "<br />" . "================================================== reduce start ==================================================" . "<br />" . "<br />";

$sum = array_reduce($numbersTillTwenty, fn($carry, $number) => $carry + $number); // run a reducer in a array

var_dump($sum);

echo "<br />" . "<br />" . "================================================== reduce end ==================================================";

?>