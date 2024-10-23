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