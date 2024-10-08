<?php
///.Loops in php:-
//.Types of loops in php:-

echo "<br>";
// echo "For-Loop";
//1:For-Loop examples:-
// for ($i = 1; $i <= 10; $i++){
//     echo "<br>";
//     echo $i;
// }





echo "<br>";
echo "While-loop";
//2:while-loop examples:-
//Increment example:-
// $num = 0;
// while($num < 10){
//     echo $num;
//     echo "<br/>";
//     echo $num++;
// }
// ;


//Decrement example:-
$num = 10;
while($num > 0){
    echo $num;
    echo "<br>";
    echo $num--;
}



echo "<br>";
echo "do-While-loop";
//3:do-while-loop examples:-
//Increment example:-
$number = 0;
do {
        $number++;
        echo "<br>";
    echo "Current value of number is $number";
    echo "<br>";
}
while ($number < 10);


//Decrement example:-
$number = 11;
do{
    $number--;
echo "<br>";
echo "The current value of number is $number";
}while($number > 0);


echo "<br>";
echo "Nested-for-loop";
//3:Nested-loop examples:-
for ($i = 1; $i <= 5; $i++){
    echo "<br>";
    echo $i;
    for($j = 1; $j <= 3; $j++){
        echo "<br>";
        echo $j;
    }
}


echo "<br>";
echo "Break and Continue statements";
//4:Break and Continue statements:-
echo "Break-Statement";
echo "<br>";
for ($i = 0; $i < 10; $i++){
    echo "Timer starts now";
    echo "Tik-Tik $i";
    echo "<br>";
    if($i === 8){
        echo "Time up!";
break;
    }
}
echo "<br>";
echo "Continue-Statement";
echo "<br>";
for ($j=1;  $j<= 10;  $j++){
    if($j == 5 || $j == 8){
        continue;
    }
    echo "<br>";
    echo $j;
}

echo "<br>";
echo "Goto statements";
//5:Goto statements:-
echo "<br>";
for ($i = 1; $i <= 20; $i++){
    echo $i;
    echo "<br>";
    if ($i == 10){
        goto jump;
    }
}

    jump:
    echo " And I jumped over the loop";

?>




