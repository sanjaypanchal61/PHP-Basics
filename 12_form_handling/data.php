<?php

// check empty fields
// if(empty($_POST["name"])) {
//     echo "Name is required";
// } else {
//     echo $_POST["name"];
// }


$name = $_POST['name'];
$email = $_POST['email'];


echo "Name: " . $name;
echo "<br>";
echo "Email: " . $email;

?>