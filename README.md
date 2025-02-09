# PHP

this is my journey to learn and understand PHP

## Folder Structure:

```
├── 📂 php-revision
    ├── 📂 src
      |- 001_output.php
      |- 002_variables.php
      |- 003_arrays.php
      |- 004_conditionals.php
      |- 005_loops.php
      |- 006_functions.php
      |- 007_array_functions.php
      |- 008_string_functions.php
      |- 009_super_globals.php
      |- 010_get_post.php
      |- 011_sanitizing_inputs.php
      |- 012_cookies.php
      |- 013_sessions.php
      |- 014_file_handling.php
      |- 015_file_upload.php
      |- 016_exception.php
      |- 017_oop.php
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

- php-revision/src/008_string_functions.php
  - `strlen($string);` // Get the length of a string
  - `strpos($string, 'o');` // Find the position of the first occurrence of a substring in a string
  - `strrpos($string, 'o');` // Find the position of the last occurrence of a substring in a string
  - `strrev($string);` // Reverse a string
  - `strtolower($string);` // Convert all characters to lowercase
  - `strtoupper($string);` // Convert all characters to uppercase
  - `ucwords($string);` // Uppercase the first character of each word
  - `str_replace('World', 'Everyone', $string);` // String replace
  - `substr($string, 0, 5);` // Return portion of a string specified by the offset and length
  - `substr($string, 5);` // Return portion of a string specified by the offset and length
  - `str_starts_with($string, 'Hello')` // Starts with
  - `str_ends_with($string, 'Hello')` // Starts with
  - `htmlentities($string2);` // HTML Entities
  - `printf('%s is a %s', 'Brad', 'nice guy');` // Formatted Strings - useful when you have outside data - Different specifiers for different data types
```
<?php
/* ---------- String Functions -------- */

/*
    Functions to work with strings
    https://www.php.net/manual/en/ref.strings.php
*/

$string = 'Hello World';

// Get the length of a string
echo strlen($string);

// Find the position of the first occurrence of a substring in a string
echo strpos($string, 'o');

// Find the position of the last occurrence of a substring in a string
echo strrpos($string, 'o');

// Reverse a string
echo strrev($string);

// Convert all characters to lowercase
echo strtolower($string);

// Convert all characters to uppercase
echo strtoupper($string);

// Uppercase the first character of each word
echo ucwords($string);

// String replace
echo str_replace('World', 'Everyone', $string);

// Return portion of a string specified by the offset and length
echo substr($string, 0, 5);
echo substr($string, 5);

// Starts with
if (str_starts_with($string, 'Hello')) {
    echo 'YES';
}

// Ends with
if (str_ends_with($string, 'ld')) {
    echo 'YES';
}

// HTML Entities
$string2 = '<h1>Hello World</h1>';
echo htmlentities($string2);

// Formatted Strings - useful when you have outside data
// Different specifiers for different data types
printf('%s is a %s', 'Brad', 'nice guy');
printf('1 + 1 = %f', 1 + 1); // float

?>
```

- php-revision/src/009_super_globals.php
  - `$GLOBALS` // A superglobal variable that holds information about any variables in global scope.
  - `$_GET` // Contains information about variables passed through a URL or a form.
  - `$_POST` //  Contains information about variables passed through a form.
  - `$_COOKIE` // Contains information about variables passed through a cookie.
  - `$_SESSION` // Contains information about variables passed through a session.
  - `$_SERVER` // Contains information about the server environment.
  - `$_ENV` // Contains information about the environment variables.
  - `$_FILES` //  Contains information about files uploaded to the script.
  - `$_REQUEST` // Contains information about variables passed through the form or URL.
```
<?php
/* ---------- Superglobals ---------- */
//Built in variables that are always available in all scopes

/*
    $GLOBALS - A superglobal variable that holds information about any variables in global scope.
    $_GET - Contains information about variables passed through a URL or a form.
    $_POST -  Contains information about variables passed through a form.
    $_COOKIE - Contains information about variables passed through a cookie.
    $_SESSION - Contains information about variables passed through a session.
    $_SERVER - Contains information about the server environment.
    $_ENV - Contains information about the environment variables.
    $_FILES -  Contains information about files uploaded to the script.
    $_REQUEST - Contains information about variables passed through the form or URL.
*/

// var_dump($GLOBALS);
// var_dump($_GET);
// var_dump($_REQUEST);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
        <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
        <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
        <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
        <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
        <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
        <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
        <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
        <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
        <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
    </ul>
</body>

</html>
```

- php-revision/src/010_get_post.php
```
<?php
/* --- $_GET & $_POST Superglobals -- */

/*
    We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// echo $_GET['name'] . '<br/>';
// echo $_GET['age'] . '<br/>';

if ($_POST['submit'])
{
    echo $_POST['name'] . '<br/>';
    echo $_POST['age'] . '<br/>';
}


?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=MAK&age=22">
    Click
</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name" />
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age" />
    </div>
    <input type="submit" value="submit" name="submit">
</form>
```

- php-revision/src/011_sanitizing_inputs.php
  - `htmlspecialchars()` // Convert special characters to HTML entities
  - `filter_var()` // Sanitize data
  - `filter_input()` // Sanitize inputs
  - `FILTER_SANITIZE_STRING` // Convert string to string with only alphanumeric, whitespace, and the following characters - _.:/
    - `FILTER_SANITIZE_EMAIL` // Convert string to a valid email address
    - `FILTER_SANITIZE_URL` // Convert string to a valid URL
    - `FILTER_SANITIZE_NUMBER_INT` // Convert string to an integer
    - `FILTER_SANITIZE_NUMBER_FLOAT` // Convert string to a float
    - `FILTER_SANITIZE_FULL_SPECIAL_CHARS` // HTML-encodes special characters, keeps spaces and most other characters

```
<?php
/* --- Sanitizing Inputs -- */

/*
    Data submitted through a form is not sanitized by default. We have methods to sanitize data manually.
*/

if (isset($_POST['submit'])) {
  // $name = $_POST['email'];
  // $email = $_POST['email'];

  // htmlspecialchars() - Convert special characters to HTML entities
  // $name = htmlspecialchars($_POST['name']);
  // $email = htmlspecialchars($_POST['email']);

  // filter_var() - Sanitize data
  // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  // $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

  // filter_input() - Sanitize inputs
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

  // FILTER_SANITIZE_STRING - Convert string to string with only alphanumeric, whitespace, and the following characters - _.:/
  // FILTER_SANITIZE_EMAIL - Convert string to a valid email address
  // FILTER_SANITIZE_URL - Convert string to a valid URL
  // FILTER_SANITIZE_NUMBER_INT - Convert string to an integer
  // FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float
  // FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters
} ?>

<!-- Pass data through a form -->
<!-- php_self can be used for xss -->
<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
); ?>" method="POST">
<div>
    <label>Name: </label>
    <input type="text" name="name">
</div>
<br>
<?php echo $email; ?>
<div>
<label>Email: </label>
    <input type="email" name="email">
</div>
<br>
    <input type="submit" name="submit" value="Submit">
</form>
```

- php-revision/src/012_cookies.php
  - `$_COOKIE` // get cookie
  - `setcookie('name', 'MAK', time() + 86400);` // set a cookie - first parameter is name second is value and third is expiry - time() = current time (86400 second are equal to one minute)
```
<?php
/* ------------- Cookies ------------ */

/*
    Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and then retrieve it when the user visits the site again.
*/

setcookie('name', 'MAK', time() + 86400); // set a cookie - first parameter is name second is value and third is expiry - time() = current time (86400 second are equal to one minute)

if (isset($_COOKIE('name')))
{
    echo $_COOKIE('name');
}

setcookie('name', '', time() - 86400)

?>
```

- php-revision/src/013_sessions.php
  - `$_SESSION` // get session
  - `$_SESSION['username'] = $username;` // set a session - simple assign it to any value
  - `header('Location: some-page');` // redirect to other page
  - `session_start();` // to start a session - must use if you want to use a session
  - `session_destroy();` // to end a session
```
<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start(); // Must be called before accessing any session data

if (isset($_POST['submit'])) {
    $username = filter_input(
        INPUT_POST,
        'username',
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
    $password = filter_input(
        INPUT_POST,
        'password',
        FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );

    if ($username == 'brad' && $password == 'password') {
        // Set Session variable
        $_SESSION['username'] = $username;
        // Redirect user to another page
        // header('Location: some-page');
    } else {
        echo 'Incorrect username or password';
    }
}
?>

<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
); ?>" method="POST">
    <div>
    <label>Username: </label>
    <input type="text" name="username">
    </div>
    <br>
    <div>
    <label>Password: </label>
    <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>
```

- php-revision/src/014_file_handling.php
  - `file_exists` // if file exist
  - `fopen` // open a file - required file path and permission - 'r' Read | 'w' Write
  - `fread` // read a file;
  - `fclose` // close a file
  - `fwrite` // write a file

```
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
```

- php-revision/src/015_file_upload.php
  - `$_FILES` // get a file
  - `$_FILES['upload']['name']` // file name
  - `$_FILES['upload']['size']` // file size
  - `$_FILES['upload']['tmp_name']` // file tmp_name
  - `move_uploaded_file` // upload a file in the folder structure
```
<?php
/* ----------- File upload ---------- */


$allowed_ext = array('png', 'jpg', 'jpeg', 'gif');

if(isset($_POST['submit'])) {
    // Check if file was uploaded
    if(!empty($_FILES['upload']['name'])) {
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/$file_name";
        // Get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));
        // echo $file_ext;

        // Validate file type/extension
        if(in_array($file_ext, $allowed_ext)) {
        // Validate file size
        if($file_size <= 1000000) { // 1000000 bytes = 1MB
            // Upload file
            move_uploaded_file($file_tmp, $target_dir);

            // Success message
            echo '<p style="color: green;">File uploaded!</p>';
        } else {
            echo '<p style="color: red;">File too large!</p>';
        }
        } else {
            $message = '<p style="color: red;">Invalid file type!</p>';
        }
    } else {
        $message = '<p style="color: red;">Please choose a file</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
<form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
); ?>" method="post" enctype="multipart/form-data">
    Select image to upload:
<input type="file" name="upload">
<input type="submit" value="Submit" name="submit">
</form>
</body>
</html>
```

- php-revision/src/016_exception.php
  - `throw new Exception` // add a new error
  - `try` // we will try things here - code which we want to run
  - `catch (Exception $e)` // only if code break it will get here
  - `finally` // always run no matter what you do in try or catch - optional
```
<?php

/* ----------- Exceptions ----------- */

/*
    PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x)
{
    if (!$x) 
    {
        throw new Exception('Division by zero');
    }

    return 1/$x;
}


try {
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    echo 'Catch Exception' . $e->getMessage(). ' ';
} finally {
    echo 'first finally';
}

echo 'hello world';

?>

```

- php-revision/src/017_oop.php
  - `class` // class are like object we can create them to use them multiple times
  -  `Access Modifiers` // public, private, protected
  - `public` // can be accessed from anywhere
  - `private` // can only be accessed from inside the class
  - `protected` // can only be accessed from inside the class and by inheriting classes
  - `extends` // you can Inherit any class using extends keyword and you can now use protected and public method here
  - `parent::` // access any parent method
```
<?php 
/* --- Object Oriented Programming -- */

/*
    From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    private $name;
    public $email;
    public $password;

    // The constructor is called whenever an object is created from the class.
    // We pass in properties to the constructor from the outside.
    public function __construct($name, $email, $password) {
        // We assign the properties passed in from the outside to the properties we created inside the class.
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    // Methods are functions that belong to a class.
    public function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

$user1 = new User('Moiz', 'moiz@test.com', 'some-password');
$user2 = new User('Maria', 'moiz@test.com', 'some-password');

// $user1->name = 'MAK'; // you can't access a protected property
$user2->set_name('MAK');

var_dump($user1);

echo $user2->get_name();

// Inheritance

class employee extends User {

    private $title;

    public function __construct($name, $email, $password, $title)
    {
        parent::__construct($name, $email, $password);

        $this->title = $title;
    }

    public function get_title()
    {
        return $this->title;
    }
}

$employ1 = new employee('moiz ali', 'moiz.ali@test.com', 'someCoolPassword123!', 'Software Engineer'); 

// var_dump($employ1);

echo $employ1->get_title();

```

- `includes` // use to include a file - no error if file not found
- `require` // use to include a file - error if file not found
- `require_one` // use to include a file - if already include then doesn't include twice

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
- `inc` use for component folder

## Resources
I start my journey using this cool stuff so shout to them:
- https://www.youtube.com/watch?v=BUCiSSyIGGU
