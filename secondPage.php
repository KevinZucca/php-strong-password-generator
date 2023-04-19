<?php 

session_start();

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

<h1>That's your password</h1>

<p><?php echo $_SESSION["password"]; ?></p>


    
</body>
</html>