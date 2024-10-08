<?php
//Connect php and mySQL each other with the help of mySQLi class:-



//1:Variables initialization:-
$host = "localhost";
$userName = "root";
$password = null;
$database = "students";

//2:Connect with mySQLi class:-
//Created with 'new' instance keyword:-
$connection = new mysqli($host, $userName, $password, $database);
if($connection->connect_error){
    die("Server not found".$connection->$connect_error);
}else{
    echo "Connection Successfully";
}

//Query execution:-
$result = $connection->query("Show tables")->fetch_all();
print_r($result);












?>