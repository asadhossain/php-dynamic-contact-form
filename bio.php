<?php

if (isset($_POST['btn'])){
    $userName = $_POST['username'];
    $email = $_POST ["email"];
    $phone = $_POST ["phone"];
    $dob   = $_POST ['dob'];
    $age   = $_POST ["age"];

}






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>User Name: <?php if(isset($userName)) {echo $userName;} ?></h3>
<h3>User Email: <?php if(isset($email)) {echo $email;} ?></h3>
<h3>User Phone: <?php if(isset($phone)) {echo $phone;} ?></h3>
<h3>User Date of Birth: <?php if(isset($dob)) {echo $dob;} ?></h3>
<h3>User Age: <?php if(isset($age)) {echo $age;} ?></h3>
    




</body>
</html>