<?php
//1:If-condition:-
$fruit = "Apple";
$fruit = "Banana";

if ($fruit === "Apple") {

    echo "An Apple a day keeps doctor away!";
}

//2:If-else-condition:-
$country = "India";
$country = "France";
if ($country === "India") {
    echo "India is an asian country.";
} else {
    echo "$country is not an asian country.";
};

//3:else-if condition:-
$appleFruit = "Apple";
$orangeFruit = "Orange";

if ($appleFruit === "Apple") {
    echo "You can eat an apple";
} elseif ($orangeFruit === "Orange") {
    echo "You can eat an orange";
} else {
    echo "You can eat anything you wish";
}


//4:Switch-statement condition:-

$MyFavTouristPlace = "Punjab";

switch ($MyFavTouristPlace) {

    case "Manali":
        echo "Manali is my brother's favourite tourist place.";
        break;
    case "Kashmir":
        echo "Kashmir is my mother's favourite tourist place.";
        break;
    case "Goa":
        echo "Goa is my favourite tourist place.";
        break;
    case "Kanyakumari":
        echo "Kanyakumari is my sister's favourite tourist place.";
        break;
    case "Punjab":
        echo "Punjab is my father's favourite tourist place.";
        break;
    default:
        echo "None of the favourite tourist place mentioned.";
        break;
}
;


echo "<br/>";

//5:Logical-operators condition based examples:-

//1)First example with 'logical and operator':-
$a = 10;
$b = 30;

if($a == 10 && $b == 30){
    echo "Condition is True with an ampersand logical operators that means both operands should be True.";
}
else{
    echo "Condition is False because Logical And operator shows that when the both operands are true condition would be met,So here answer is False";
}


echo "<br>";

//2)Second example with 'logical or operator':-
$x = 10;
$y = 20;

if ($x == 10 || $y == 15){
    echo "Condition is true , because logical OR operators shows that if one of the operand is true the condition would be met.";
} else {
    echo "Condition is False because Logical OR operator shows that when one of the  operand is true condition would be met and if the condition would met false and So here the answer will be False";
}

echo "<br>";

//3)Third example with 'logical not operator':-
$a = 10;

if ($a != 11) {
    echo "Condition is true , because logical not operators shows that if one of the operand is not true and  the condition would be met.";
} else {
    echo "Condition is False because Logical not operator shows that when one of the  operand is true condition would be met and if the condition would met false and So here the answer will be False";
}




?>
