<?php
//session_start();

//$isLoggedIN = isset($_SESSION['auth']);
//if($isLoggedIN)
if(!isset($_COOKIE['auth'])){
    header('location: login.php');
}

?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
</head>
<body>
    <h1>WELCOME TO THE PAGE</h1>
</body>
</html>