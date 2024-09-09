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

- php-revision/src/01_output.php
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

## Code Explaining