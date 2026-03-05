<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function demo() {
      $x = 10; // local variable
      echo $x;
    }
    demo();

    $x = 10; // global variable

    // Global Variable Access
    $i = 10;
    function demo2() {
      global $i; // global keyword
      echo $i;
    }
    demo2();

    ?>
</body>
</html>