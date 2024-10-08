<?php
///:Multidimensional array:-[Nested array = Array within an array.]

//Users-Example:-


$users = [
    [01, "yash", "pune", "yd@test.com",],
    [02, "siddhi", "osd", "sd@test.com",],
    [03, "satwik", "Dharashiv", "ssd@test.com",],
];

// echo "<pre>";
// print_r($users);
// echo "<pre/>";


echo "<br>";

//loop over an array to extract the values from an array:-

//Classical for loop:-

for ($i = 0; $i < count($users); $i++){

    // print_r($users[$i]);
    // echo "<br>";
    //Nested loop

    for ($j = 0; $j < count($users[$i]); $j++){
        print_r($users[$i] [$j]);
        echo "<br>";
    }
}
;









?>