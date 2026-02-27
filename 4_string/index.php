<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    //string example
    $name = "roy";
    $color = 'red';
    echo $name;

    // string concatenation
    $name = "roy";
    $color = 'red';
    echo $name . " " . $color;

    // string functions

    // strlen()
    echo strlen("Hello");

    // str_word_count()
    echo str_word_count("Hello World");

    // trim() => extra spaces remove
    $text = "  Hello  ";
    echo trim($text);
    
    ?>
</body>
</html>