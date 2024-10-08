<?php
//2:Post Request:-
//->Request is not visible in the address bar.
//->ecure request.
//->Used for create and update operations on server.




if($_POST){
    echo "<table border = 1>";
    echo "<td>";
    echo $_POST["user_name"];
    echo "<br>";
    echo $_POST["user_email"];
    echo "<br>";
    echo $_POST["user_password"];
    echo "<br>";
    echo "</td>";
    echo "<table>";
}







?>