<?php
///:Display Array Data in Table:-



$users = [
    [1, "Sam", "sam@test.com"],
    [2, "Peter", "peter@test.com"],
    [3, "Tony", "tony@test.com"],
    [4, "Rambo", "rambo@test.com"],
];

// echo "<pre>";
// print_r($users);
// echo "</pre>";

//Lets loop over an array and let the data displays onto the table:-
echo "<table border=1>";
for ($i = 0; $i < count($users); $i++){
    echo "<tr>";
for($j = 0; $j < count($users[$i]); $j++){
        echo "<td>";
        echo $users[$i][$j];
        echo "</td>";
}
    echo "</tr>";
}
echo "</table>";









?>


