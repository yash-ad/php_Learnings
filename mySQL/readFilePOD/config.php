<?php

//1:Variable Initialization:-
$host = "localhost";
$userName = "root"; //By default mySQL username.
$password = null; //By default mySQL password.

//2:Connection with PDO(php data objects):-
try{
$connection = new PDO("mysql:host=$host;dbname=students",$userName,$password);
$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    // echo "Connection Successful";
}catch(PDOException $err){
echo "Connection Failed ".$err->getMessage();
}







?>