<?php

// $host = "localhost";
// $user = "root";
// $dbname = "test";
// $pass = "";

// try{
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

//     $sql = "CREATE TABLE users (id INT(6) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(30) NOT NULL, password VARCHAR(30) NOT NULL)";

//     $pdo->exec($sql);
//     echo "Tabela u krijua";
// }
// catch(Exception $e){
//     echo "Error  Tabela nuk u krijua: ";
// }

//
$host = "localhost";
$user = "root";
$dbname = "test2";
$pass = "";
//
try{
$pdo = new PDO("mysql:host=localhost;dbname=test2", "root", "");

$username = "Etnik";

$password = password_hash("mypassword", PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, password) VALUES ('$username' , '$password')";

$pdo->exec($sql);

echo "User u shtua me sukses";
}

catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}

//
try{
    $pdo = new PDO("mysql:host=localhost;dbname=test2", "root", "");

$sql = "ALTER TABLE users ADD email VARCHAR(255)";

$pdo->exec($sql);

echo "Tabela u shtua me sukses";

}

catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
//
try{
    $pdo = new PDO("mysql:host=localhost;dbname=test2", "root", "");
    
    $sql = "ALTER TABLE users DROP COLUMN username";

    $pdo->exec($sql);

echo "Kolona u fshi me sukses";
}

catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
//

try{
    $pdo = new PDO("mysql:host=localhost;dbname=test2", "root", "");
    
    $sql = "DROP TABLE produktet";

    $pdo->exec($sql);

echo "Tabela u fshi me sukses";
}
catch(PDOException $e){
    echo "Error: " . $e->getMessage();
}
//



?>