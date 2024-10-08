<?php

session_start();

if (isset($_POST['button'])) {

if($_POST["button"]== "set"){
        $val = $_POST['user'];
        $_SESSION['user'] = $val;
        echo "Session created successfully";
}

if($_POST["button"]== "get"){
        echo "The user is :" . $_SESSION['user'];
}


    if ($_POST["button"] == "delete") {
        echo "Session deleted successfully";
        session_destroy();
        session_reset();
    }






}
?>