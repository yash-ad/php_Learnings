<?php
//To check when the get method if there is set an  id or not:-
if(isset($_GET['id'])){
    include("./config.php");
    $id = $_GET['id'];

    //Prepare the query:-
    $sql = "DELETE FROM clients WHERE id=$id";

    //Execute the query:-
    $connection->query($sql);

}

    header("Location:./read.php");
    exit;
















?>