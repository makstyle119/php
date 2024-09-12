# PHP

this is my journey to learn and understand PHP

## Folder Structure:

```
|- php-revision
  |- src
    |- 01_output.php
docker-compose.yml
Dockerfile
README.md
```

- 000/folder-structure
```
Nothing much just basic folder structure
```

- php-revision/src/001_output.php
  - `echo` most common thing use for printing (specially for debugging) - with `echo` you can print multiple values using as comma separated values - only string and numbers
  - `print` same as `echo` but only print single value
  - `print_r()` use a lot with arrays
  - `var_dump()` against use a lot with array but can use with anything - return type as well
  - `var_export()` similar with `var_dump()` but not as efficient as `var_dump()` is
  - `<?= 'Some Text' ?>` single line only - same as `echo`
```
<?php // This is a php tag. If there is no html or other content below the php, we don't need to close the php tag.

  // echo 'hello World';
  // // Single line comments
  // /**
  //  * Multiline Comments
  //  */
  // // You need semicolon at the send of every statement ';'

  /* ------- Outputting Content ------- */
  
  // // Echo - Output strings, numbers, html, etc
  // echo 123, 'Hello', 10.5;

  // // print - Similar to echo, but a bit slower
  // print('Hello');

  // // print_r - Gives a bit more info. Can be used to print arrays
  // print_r('Hello');
  // print_r([1, 2, 3]);

  // // var_dump - Even more info like data type and length
  // var_dump('Hello');
  // var_dump([1, 2, 3]);

  // // var_export - Similar to var_dump(). Output a string representation of a variable
  // var_export('Hello');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>01_output</title>
</head>
<body>
  <h1>
    <?php echo 'Post One';?>
  </h1>
  <h1>
    <?='Post Two' ?>
  </h1>
</body>
</html>

```
- php-revision/src/002_variables.php
  - `Variables`
    - `String` - A string is a series of characters surrounded by quotes
    - `Integer` - Whole numbers
    - `Float` - Decimal numbers
    - `Boolean` - true or false
    - `Array` - An array is a special variable, which can hold more than one value
    - `Object` - A class
    - `NULL` - Empty variable
    - `Resource` - A special variable that holds a resource
  - `Data Types`
    - `Variables` must be prefixed with $
    - `Variables` must start with a letter or the underscore character
    - `variables` can't start with a number
    - `Variables` can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    - `Variables` are case-sensitive ($name and $NAME are two different variables)
```
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
```

- php-revision/src/003_arrays.php
  - `Arrays`
    - `Simple Array` - anything between two large brackets with a comma to separate them is a simple array.
    - `Associate Array` - in associate array we will set key and value just like object in js.
    - `Multi Dimension Array` - here we will have array inside another array
```
<?php
    // Simple Array
    $numbers = [1, 2, 3, 4, 5];
    $fruits = array('apple', 'orange', 'banana');

    print_r($numbers);
    var_dump($fruits);
    echo $fruits[1];

    // Associate Array
    $color = [
        'black' => '#000',
        'white' => '#fff'
    ];

    echo $color['black'];

    // Multi Dimension Array
    $people = [
        [
            'first_name' => 'Moiz',
            'last_name' => 'Ali',
            'email' => 'some.email@cool.com'
        ],
        [
            'first_name' => 'Maria',
            'last_name' => 'Khan',
            'email' => 'some.email2@cool.com'
        ]
    ];

    echo $people[1]['email'];

    // convert an array into json
    var_dump(json_encode($people));
```

## Code Explaining