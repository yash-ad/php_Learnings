<?php

//1:Get Request:-
//->Request is visible in the address bar.
//->Less secure request.
//->Mostly used to get data from the server.


if($_GET){
    echo "User name is " . $_GET['user_name'];
    echo "<br>";
    echo "User password is " . $_GET['user_password'];

}
;
?>