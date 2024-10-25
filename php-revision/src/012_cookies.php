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