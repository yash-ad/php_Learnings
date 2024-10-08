<?php


///.$_REQUEST:-
//$_request is super global variable that contains data from submitted forms and cookies.
//Its an associative array that contents og $GET , $POST and $COOKIE.


// print_r($_REQUEST);

if($_REQUEST){
    foreach ($_REQUEST as $key => $data) {
        echo $key . " is " . $data;
        echo "<br/>";
    }
}
;




?>