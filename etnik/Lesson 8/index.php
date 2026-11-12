<?php

$username = $_GET['username'];
$password = $_GET['password'];
echo "username: $username ";
echo "<br>";
echo "password: $password"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="get">

<label for="surname">Username</label><br>
<input type="text" id="surname" name="surname" placeholder="surname"><br>
<label for="password">Password</label><br>
<input type="password" id="password" name="password" placeholder="password"><br>
<input type="submit" value="Submit">

</form>


</body>
</html>


