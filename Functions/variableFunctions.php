<?php

//Variable functions and callBack functions:-

function test(){

    echo "test function called <br/>.";

}


$test = "test";



function main($cbFunc){
echo "main function called <br/>";
    $cbFunc();
}

main($test);




?>