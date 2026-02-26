<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    // ifStatement
    $age = 20;

    if ($age >= 18) {
       echo "You are adult.";
    }

    // if-else Statement
    $age = 16;

    if ($age >= 18) {
       echo "You can vote.";
    } else {
       echo "You cannot vote.";
    }

    // if-elseif-else
    $marks = 75;
 
    if ($marks >= 90) {
      echo "Grade A";
    } elseif ($marks >= 70) {
      echo "Grade B";
    } elseif ($marks >= 50) {
    echo "Grade C";
    } else {
      echo "Fail";
    }
     
    // Nested if
    $age = 22;
    $hasLicense = true;
    
    if ($age >= 18) {
        if ($hasLicense) {
            echo "You can drive.";
        } else {
            echo "License required.";
        }
    }

    // Switch Statement syntax
    switch (variable) {
        case 1:
            // code
            break;
    
        case 2:
            // code
            break;
    
        default:
            // default code
    }


    // Example 1   
    $day = 2;

   switch ($day) {
    case 1:
        echo "Monday";
        break;

    case 2:
        echo "Tuesday";
        break;

    case 3:
        echo "Wednesday";
        break;

    default:
        echo "Invalid day";
   }

   //Example 2
   $role = "admin";

   switch ($role) {
    case "admin":
        echo "Full access";
        break;

    case "editor":
        echo "Edit access";
        break;

    case "user":
        echo "Limited access";
        break;

    default:
        echo "No access";
   }


    ?>
</body>
</html>