<?php 

$server = 'mysql49.unoeuro.com';
$username = 'natstorm_com';
$password = 'stormfink18';
$database = 'natstorm_com_db';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    
} catch(PDOException $e){
    die( "Connection failed: " . $e->getMessage());
}