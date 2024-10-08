<?php
///:Remove & Add Element in Array:-


$cars = ["Honda", "Suzuki", "Hyundai", "Tata", "Mahindra"];
// echo "<pre>";
// print_r($cars);
// echo "</pre>";


//1)array_push($array and parameters): Adds an element at the end of an array:-
array_push($cars, "Jeep", "BMW", "Audi");
echo "<pre>";
print_r($cars);
echo "</pre>";

echo "<br>";



//2)array_pop($array): Removes an element at the end of an array:-
// array_pop($cars);
// array_pop($cars);
// echo "<pre>";
// print_r($cars);
// echo "</pre>";



//3)array_splice($array and parameters) : removes an element what we want to specify:-
array_splice($cars, -5);
echo "<pre>";
print_r($cars);
echo "</pre>";

?>