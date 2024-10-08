<?php

///.Local and Global variable:-


//Global Variable:-
 //A global variable can be access anywhere into the program and declared it can be used outside of the function.

$lastName = "Dandnaik";

$gblvariable = "I'm a global variable";

 //Local Variable:-
 //A variable is locally available to the function and that can be used into the function only.
function sayMyName($lstName){
    $name = "Yash";
    echo $name;
    echo "<br>";
    echo $lstName;
    echo "<br>";
    global $gblvariable;
    echo $gblvariable;
}
;
sayMyName($lastName);

















?>