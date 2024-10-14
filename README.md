# PHP

this is my journey to learn and understand PHP

## Folder Structure:

```
|- php-revision
  |- src
    |- 001_output.php
    |- 002_variables.php
    |- 003_arrays.php
    |- 004_conditionals.php
    |- 005_loops.php
    |- 006_functions.php
    |- 007_array_functions.php
docker-compose.yml
Dockerfile
README.md
```

## Code Explaining

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

- php-revision/src/04_conditionals.php
  - If else
    - `if (condition)` - check if the statement is true
    - `elseif (condition)` - same as if check for second or more condition - optional
    - `else` - this will run if no condition match - optional
  - Ternary operator
    - `?` this is if statement
    - `-` this is else
    - `?` and `-` should run together
    - `&&` this is and operator
    - `??` this will check for first value and if not exist then go for second
  - Switch cases
    - `switch(condition)` - switch case are same as if else here you start with passing the parameter then check if on every case
    - `case value` - check if provided value is same as parameter
    - `break` - to break the switch case
    - `default` - it will run if no other case match - optional
```
<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
    < Less than
    > Greater than
    <= Less than or equal to
    >= Greater than or equal to
    == Equal to
    === Identical to
    != Not equal to
    !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
} 
*/

$age = 20;

if ($age > 18) 
{
    echo 'you are old enough' + "\n";
} 
elseif ($age < 100) // elseif is adding a second or more conditions
{
    echo 'too much old' + "\n";
} 
else // else is a default which will run if no condition match
{
    echo 'you are not old enough' + "\n";
}

$sports = ['Cricket'];

if (empty($sports)) // empty is a built in function to check is array is empty or not 
{
    echo 'no sports exist' + "\n";
}

/* -------- Ternary Operator -------- */
/*
    The ternary operator is a shorthand if statement.
    Ternary Syntax:
        condition ? true : false;
*/

echo empty($sports) ? 'no sports exist' :  $sports[0] + "\n";

echo empty($sports) && 'no sports exist' + "\n";

$first_post = $sports[0] ?? null; //  ?? will check for first value if not exist add second value

/* -------- Switch Statements ------- */

$fav_color = 'red';

switch($fav_color) // switch case are same as if else here you start with passing the parameter then check if on every case
{
    case 'red': // check if provided value is same as parameter
        echo 'Your Favorite color is red';
        break; // to break the switch case
    case 'blue':
        echo 'Your Favorite color is blue';
        break;
    default: // it will run if no other case match
        echo 'I don\'t recognized your favorite color';
        break;
}

?>
```

- php-revision/src/005_loop.php
  - `for loop`
    - `for($a = 0; $a <= 10; $a++)` - for loop have 3 parts - 1. initialize the variable - 2. add the condition (how much you want to run this loop) - 3. increment or decrement the value
  - `while Loop`
    - `while ($b <= 0)` - same as for loop you put your condition and it will run until condition become true
    - `$b -= 1;` - here we will pu increment or decrement
  - `do while loop`
    - `do {}` - in do while loop we perform the task first then check condition - in other words if you want to run condition at least one time use this
    - `$c++;` - increment or decrement
    - `while ($c < 0);` - checking the condition here
  - `foreach loop`
    - `foreach ($posts as $index => $post)` - we use this for array - you can use above loops for arrays as well it just it more common to use - we can get index and individual value from the array using foreach
```
<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
    for (initialize; condition; increment) {
        // code to be executed
    }
*/

echo "for loop start here" . "<br />" . "<br />";

for($a = 0; $a <= 10; $a++) // for loop have 3 parts - 1) initialize the variable - 2) add the condition (how much you want to run this loop) - 3) increment or decrement the value
{
    echo $a . "<br />"; // do whatever you like here
}

echo  "<br />" . "for loop ends here" . "<br />";

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
    while (condition) {
        // code to be executed
    }
*/

echo "<br />" . "while loop start here" . "<br />" . "<br />";

$b = 15;
while ($b <= 0) // same as for loop you put your condition and it will run until condition become true
{
    echo $b . "<br />";
    $b -= 1; // here we will pu increment or decrement
}

echo "<br />" . "while loop ends here" . "<br />";

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
    do {
        // code to be executed
    } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/

echo "<br />" . "do while loop start here" . "<br />" . "<br />";

$c = 0;

do { // in do while loop we perform the task first then check condition - in other words if you want to run condition at least one time use this
    echo $c . "<br />";
    $c++; // increment or decrement
} while ($c < 0); // checking the condition here

echo "<br />" . "do while loop ends here" . "<br />";

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
    foreach ($array as $value) {
        // code to be executed
    }
*/

echo "<br />" . "foreach loop start here" . "<br />" . "<br />";

$posts = ['first post', 'second post', 'third post'];

foreach ($posts as $index => $post) // we use this for array - you can use above loops for arrays as well it just it more common to use - we can get index and individual value from the array using foreach
{
    echo "(" . $index . ")" . " " .$post . "<br>";
}

echo "<br />" . "foreach loop ends here" . "<br />";

?>
```

- php-revision/src/006_functions.php
  - `function` - Functions are reusable blocks of code that we can call to perform a specific task. We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope
    - `normal function` 
      - `function register_user($email)` - to create a function you need to use function key word and then function name and the open brackets - you can use argument in the function - argument can be use to get user input or value which can help function functionality
      - `echo $name . ' registered with ' . $email;` // function have strict scope you can't use anything outside or don't use any variable which you declare inside the function outside
      - `global $name;` // using global keyword we can add global scope variable into local scope
      - `register_user('makstyle119@gmail.com');` // function doesn't run by their own you have to run the manually by calling their name
      - `$sum_value = sum(2, 3);` // function can run by them self or can be assign to a variable
    - `anonymous function`
      - `$subtraction = function($a, $b) {` // when you assign function directly to a variable like this - this is called anonymous function
    - `arrow function`
      - `$multiplication = fn($a, $b) => $a * $b;` // this is how you can create a arrow function use fn to create a function and if it's a single line function you don't need return or brackets
```
<?php
/* ------------ Functions ----------- */

/*
    Functions are reusable blocks of code that we can call to perform a specific task.
    We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
    function functionName($arg1, $arg2, ...) {
        // code to be executed
    }
*/

echo "normal function start here" . "<br />" . "<br />";

$name = 'MAK';

function register_user($email) // to create a function you need to use function key word and then function name and the open brackets - you can use argument in the function - argument can be use to get user input or value which can help function functionality 
{
    global $name; // using global keyword we can add global scope variable into local scope
    echo $name . ' registered with ' . $email . "<br />"; // function have strict scope you can't use anything outside or don't use any variable which you declare inside the function outside
}

register_user('makstyle119@gmail.com'); // function doesn't run by their own you have to run the manually by calling their name

function sum($a, $b = 4) {
    return $a + $b; // function can return and can be void - your argument can have a default value so you if you don't pass the parameter while calling the function default value will be use
}

$sum_value = sum(2, 3); // function can run by them self or can be assign to a variable

echo $sum_value . "<br />";

echo "<br />" . "normal function ends here" . "<br />";

echo "<br />" . "anonymous function start here" . "<br />";

$subtraction = function($a, $b) // when you assign function directly to a variable like this - this is called anonymous function
{  
    return $a - $b;
};

echo $subtraction(3, 1) . "<br />";

echo "<br />" . "anonymous function ends here" . "<br />";

echo "<br />" . "arrow function start here" . "<br />";

$multiplication = fn($a, $b) => $a * $b . "<br />"; // this is how you can create a arrow function use fn to create a function and if it's a single line function you don't need return or brackets

echo $multiplication(3, 4) . "<br />";

echo "<br />" . "arrow function ends here" . "<br />";

?>

```

- php-revision/src/007_array_functions.php
  - `count($fruits);` // count array length
  - `var_dump(in_array('apple', $fruits));` // search in array
  - `$fruits[] = 'grape';` // add in the last
  - `array_push($fruits, 'blueberry', 'strawberry');` // add in the last
  - `array_unshift($fruits, 'mango');` // add in the first
  - `array_pop($fruits);` // remove last
  - `array_shift($fruits);` // remove first
  - `unset($fruits[2]);` // remove by index and also the index
  - `$chunked_array` = array_chunk($fruits, 2); // second argument is the n
  - `$arr3 = array_merge($arr1, $arr2);` // merge two arrays
  - `$arr4 = [...$arr1, ...$arr2];` // merge two arrays
  - `$combineColorAndFruitArray = array_combine($color, $fruit);` // combine two arrays
  - `$keys = array_keys($combineColorAndFruitArray);` // return keys of an array
  - `$flipped = array_flip($combineColorAndFruitArray);` // flip the array
  - `$numbersTillTwenty = range(0, 20);` // make range in form of array
  - `$numbersTillTwentyWithString = array_map(function($number) {`
    `return "Number $number";`
  `}, $numbersTillTwenty);` // run a map in the array
  - `$lessThenTen = array_filter($numbersTillTwenty, fn($number) => $number < 10);` // run a map and return where condition match 
  - `$sum = array_reduce($numbersTillTwenty, fn($carry, $number) => $carry + $number);` // run a reducer in a array
```
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

```

## Logical Operators
- `<` = less than
-  `>` = greater than
-  `<=` = less than or equal to
-  `>=` = greater than or equal to
-  `==` = equal to
-  `===` = identical to
-  `!` = not comparison
-  `!=` = mot equal to
-  `!==` = not identical to
-  `?` = (in ternary operator) if
-  `:` = (in ternary operator) else
-  `??` = or comparison
-  `&&` = and comparison
-  `||` = or comparison

## Style Guide
- `//` this is a single line comment = use for single line comments
- `/*
    this is a multi-line
    comment
  */` = use for multi line comments
- `kabab case` is recommended in `PHP`, eg: my_app.
- `PHP` ignore `white spaces` so you can hit the enter button as much as you want - ( not recommended )