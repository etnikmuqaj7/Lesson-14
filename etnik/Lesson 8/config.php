<?php
session_start();
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'test';

try{
    $connect = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

}catch(Exception $e){
    echo "Connection failed: " . $e->getMessage();
}

?>