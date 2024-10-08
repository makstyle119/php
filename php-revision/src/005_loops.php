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
