<?php

session_start(); 

include __DIR__ . "/./partials/functions.php";


$userPassword = $_GET["passwordCharacters"] ?? '';
$charactersList = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789#?!=()/&%$£';

$_SESSION["password"] = generatePassword($userPassword, $charactersList);


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php strong password generator</title>
</head>
<body>

<p>How many characters do you need?</p>
<form action="index.php" method="GET">
    <input type="number" name="passwordCharacters" required>
    <input type="submit">
</form>

<a href="secondPage.php"> Check</a>

</body>
</html>