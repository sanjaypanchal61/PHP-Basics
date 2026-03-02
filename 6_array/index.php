<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

     // indexed Array
     $colors = ["red", "green", "blue"];
    // access
     echo $colors[0];
     echo $colors[1];

    // associative array
    $student = [
        // Key => value
        "name" => "jack",
        "age" => 21,
        "city" => "ahmedabad"
    ];
    // access
    echo $student["name"];

    // multidimensional array
    $colors  = [
        ["red", 10],
        ["green", 11],
        ["blue", 12]
    ];
    // access
    echo $students[0][0];

    // foreach with indexed array
    $fruits = ["apple", "banana", "mango"];

    foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
    }

    // foreach with associative array
    $student = [
        "name" => "roy",
        "age" => 24
    ];
    
    foreach ($student as $key => $value) {
        echo $key . ":" . $value . "<br>";
    }

    // array functions

    // count()
    $colors = ["red", "green", "blue"];
    echo count($colors);

    // array_push()
    $colors = ["red", "green"];
    array_push($colors, "blue");
    print_r($colors);

    // array_pop()
    $colors = ["red", "green", "blue"];
    array_pop($colors);
    print_r($colors);

    // array_shift()
    $colors = ["red", "green", "blue"];
    array_shift($colors);
    print_r($colors);

    // array_unshift()
    $colors = ["green", "blue"];
    array_unshift($colors, "red");
    print_r($colors);

    // in_array()
    $colors = ["red", "green", "blue"];
    if (in_array("red", $colors)) {
        echo "found";
    }

    // sort() – ascending order
    $numbers = [4, 2, 8, 1];
    sort($numbers);
    print_r($numbers);

    // rsort() – descending order
    $numbers = [4, 2, 8, 1];
    rsort($numbers);
    print_r($numbers);
    
    ?>
</body>
</html>