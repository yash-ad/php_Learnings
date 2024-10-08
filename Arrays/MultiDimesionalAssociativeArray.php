<?php
///.Multidimensional-Associative-Array
$fruitDetails = [
    ["Sr.no" => "01", "Name" => "Apple", "Price" => "Rs-150"],
    ["Sr.no" => "02", "Name" => "Pineapple", "Price" => "Rs-250"],
    ["Sr.no" => "03", "Name" => "Banana", "Price" => "Rs-350"],
    ["Sr.no" => "04", "Name" => "Kiwi", "Price" => "Rs-450"],
];

// echo "<pre>";
// print_r($fruitDetails);
// echo "<pre>";


//Lets loop over an array and displays on the table:-


//Nested loop for extracting values from a nested array:-
// forEach($fruitDetails as $fruit){
//     // print_r($fruit);
//     // echo "<br>";
//     forEach($fruit as $key=>$item){

//         echo "$key is $item";
//     echo "<br>";

//     }

//     echo "<br>";
//     echo "<br>";
//     ;
// }
// ;


echo "<table border=1>";
foreach ($fruitDetails as $fruit) {
    // print_r($fruit);
    // echo "<br>";
    echo "<tr>";
    foreach ($fruit as $key => $item) {
        echo "<td>";
        echo "$key is $item";
        echo "<br>";
        echo "</td>";
    }
    echo "</tr>";
};
echo "</table>";


?>