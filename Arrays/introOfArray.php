<?php

$users = ["Navkar", "Onkar", "Parikshit", "Prajwal", "Ojas"];

// echo $users[0];
// echo "</br>";
// echo $users[1];
// echo "</br>";
// echo $users[2];
// echo "</br>";
// echo $users[3];
// echo "</br>";
// echo $users[4];

//What if the users are numerous , then here a loop comes into the picture:-

//Classic for loop:-
for ($i = 0; $i < count($users); $i++){
    echo $users[$i];
    echo "</br>";
}







?>