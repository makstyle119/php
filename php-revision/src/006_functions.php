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