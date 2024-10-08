<?php

function userDetails(){
    echo "<h1>User Details</h1>";
}
function user(){
    $name = "Yash Dandnaik";
    $email = "yashrajdandnaik@gmail.com";
    $Id = "#310398";
    userDetails();
    echo "Username is :$name";
    echo "<br>";
    echo "Useremail is :$email";
    echo "<br>";
    echo "UserId is :$Id";
}


user();
;






?>