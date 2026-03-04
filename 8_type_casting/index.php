<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

  // string to integer
   $number = "100";
   $number = (int) $number; 
   var_dump ($number);

  // integer to string
  $num = 50;
  $str = (string) $num;
  var_dump($str);

  // float to integer
   $price = 99.99;
   $price = (int) $price;
   var_dump($price);

  // boolean casting  
  $value = 0;
  $result = (bool) $value;
  var_dump($result);

  // array casting  
  $num = 100;
  $arr = (array) $num;
  print_r($arr);


    ?>
</body>
</html>