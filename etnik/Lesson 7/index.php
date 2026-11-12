<?php 

$host = "localhost";
$user = "root";
$dbname = "test4";
$pass = ""; 

 try {
    $conn = new PDO("mysql:host = $host; dbname = $dbname;", $user , $pass);

    echo "Connected";
}
catch (Exeption $e) {
    echo "Not connected";
};


try{
    $conn = new PDO("mysql:host=$host", $user,$pass);

    $sql = "CREATE DATABASE testdb";
    $conn->exec($sql);

    echo "Databasa u krijua";
}
catch (Exception $e){
    echo "Databaza nuk eshte kriju";
}


try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $sql = "CREATE TABLE users (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL)";
    $pdo->exec($sql);
    echo "Tabela u krijua";
}
catch(Exception $e){
    echo "Error  Tabela nuk u krijua: ";
}


try{
$pdo = new PDO("mysql:host=localhost;dbname=test4", "root", "");

$username = "Etnik";

$password = password_hash("mypassword", PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username' , '$password')";

$pdo->exec($sql);

echo "User u shtua me sukses";
}

catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

?>