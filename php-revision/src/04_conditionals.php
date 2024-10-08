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

if ($age > 18) // check if the statement is true
{
    echo 'you are old enough' . "\n";
} 
elseif ($age < 100) // elseif is adding a second or more conditions
{
    echo 'too much old' . "\n";
} 
else // else is a default which will run if no condition match
{
    echo 'you are not old enough' . "\n";
}

$sports = ['Cricket'];

if (empty($sports)) // empty is a built in function to check is array is empty or not 
{
    echo 'no sports exist' . "\n";
}

/* -------- Ternary Operator -------- */
/*
    The ternary operator is a shorthand if statement.
    Ternary Syntax:
        condition ? true : false;
*/

echo empty($sports) ? 'no sports exist' :  $sports[0] . "\n";

echo empty($sports) && 'no sports exist' . "\n";

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