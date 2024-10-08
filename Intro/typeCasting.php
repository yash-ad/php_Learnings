<?php

///.Type casting in php:-

//A data type converts into another data type is called as casting or 'type-casting'.

//1.string()
$a = 1;
$convertToString = (string) $a;
echo $convertToString;
var_dump($convertToString);

echo "<br>";
echo "<br>";

//2.Int()
$b = "5";
$convertToInt = (int) $b;
echo $convertToInt;
var_dump($convertToInt);


echo "<br>";
echo "<br>";

//3.float()
$c = 10;
$convertToFloat = (float) $c;
echo $convertToFloat;
var_dump($convertToFloat);




echo "<br>";
echo "<br>";



//5.bool() -> Converts to data type boolean.
$d = 1;
$convertToBool = (bool) $d;
echo $convertToBool;
var_dump($convertToBool);


echo "<br>";
echo "<br>";



//6.array() -> Converts to data type array.
$e = 101;
$convertToArray = (array) $e;
echo $convertToArray;
var_dump($convertToArray);


echo "<br>";
echo "<br>";



//7.object() -> Converts to data type object.
$f = 20;
$convertToObject = (object) $f;
echo $convertToObject;
var_dump($convertToObject);









?>