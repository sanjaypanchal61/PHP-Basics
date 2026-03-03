<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // function syntax
    function functionName() {
        // code
    }

    // example
    function demo() {
        echo "hello world";
    }
    
    demo(); // function call

    // function with parameters
    function sum($a, $b) {
        echo $a + $b;
    }
    
    sum(2, 10);

    // default parameter
    function demo2($name = "Guest") {
        echo "Hello " . $name;
    }
    
    demo2();        
    demo2("world");

    // return keyword
    function multiply($a, $b) {
        return $a * $b;
    }
    
    $result = multiply(4, 5);
    echo $result;


    // arrow function
    $add = fn($a, $b) => $a + $b;

    echo $add(2, 5);


    ?>
</body>
</html>