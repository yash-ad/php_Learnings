<?php
///Comparison operators:-
//1)Double equals:-
// $x = 5;
// $y = 5;
// //Double equals it checks only for value.
// echo var_dump($x == $y); //bool(true)
// //Returns true if $x is equal to $y;



// //2)Identical operator:-
// $x = 5;
// $y = 5;
// //Identical operator it checks for value and data type both.
// echo var_dump($x === $y); //bool(true)
// //Returns true if $x is identical to $y;



//3)Not equal operator:-
// $x = 5;
// $y = 4;
// //Not equal operator it checks for value.
// echo var_dump($x != $y);//bool(true)
// // //Returns true if $x is Not equal to $y;


//4)Not identical operator:-
$x = 5;
$y = "5";
//Not identical operator it checks for value and type.
echo var_dump($x != $y);//bool(false)
//Returns true if $x is Not identical to $y;



//5)Greater than operator:-
$x = 5;
$y = 4;
//Greater than operator it checks if one operand is greater than the another operand.
echo var_dump($x > $y);//bool(false)
//Returns true if $x is greater than $y;



//6)Less than operator:-
$x = 4;
$y = 5;
//Less than operator it checks if one operand is less than the another operand.
echo var_dump($x < $y);//bool(true)
//Returns true if $x is less than $y;



//7)Greater than or equal to operator:-
$x = 6;
$y = 5;
echo var_dump($x >= $y);//bool(true)
//Returns true if $x is greater than or equal to $y;

//8)Less than or equal to operator:-
$x = 6;
$y = 6;
echo var_dump($x <= $y);//bool(true)
//Returns true if $x is less than or equal to $y;


?>