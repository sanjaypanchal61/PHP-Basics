<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    // for Loop syntax
    for (start; condition; increment) {
        // code
    }

    // for Loop example
    for ($n = 1; $n <= 5; $n++) {
        echo $n . "<br>";
    }


    // while Loop example
    $i = 1;

    while ($i <= 5) {
        echo $i . "<br>";
        $i++;
    }


    // do-while Loop example
    $i = 1;

    do {
        echo $i . "<br>";
        $i++;
    } while ($i <= 5);


    // break example
    for ($i = 1; $i <= 10; $i++) {

        // if the value becomes 5
        if ($i == 5) {
            break; // stop the loop completely
        }
    
        // print numbers until 4 only
        echo $i . "<br>";
    }


    // continue example
    for ($i = 1; $i <= 5; $i++) {

        // if the value is 3
        if ($i == 3) {
            continue; // skip this iteration only
        }
    
        // print all numbers except 3
        echo $i . "<br>";
    }
    
    ?>
</body>
</html>