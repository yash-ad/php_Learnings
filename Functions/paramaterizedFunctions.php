<?php


//1:Calculation of sums:-
function sumOfNums($a,$b){
    echo $a + $b;
}
sumOfNums(30,20);//50

echo "<br>";

//2:Display Dynamic name and color using function:-
function dynamicUserdata($name,$color){
    echo "<h1 style='color:$color'>$name</h1>";
}
dynamicUserdata("Yash Dandnaik", "orange");

?>