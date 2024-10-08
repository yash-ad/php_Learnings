<?php
///:'10' Basic but important functions in php:-

//1:For string length -> strlen(string);
$myFname = "Yash Dandnaik";
echo strlen($myFname);
echo "<br>";



//2:To check the type of a variable -> var_dump(variable) ;
$myBirthDate = 31031998;
echo var_dump($myBirthDate);
echo "<br>";

//3:To check the date -> date();
//1)d - The day of the month (from 01 to 31):-
echo date("d");
echo "<br>";
//2)D - A textual representation of a day (three letters):-
echo date("D");
echo "<br>";
//3)l (lowercase 'L') - A full textual representation of a day
echo date("l");
echo "<br>";

//4)A - Uppercase AM or PM:-
echo date("A");
echo "<br>";

//4:To check the information of php -> phpinfo();
echo phpinfo();
echo "<br>";

//5:To check the provided variable or value is a string or not -> is_string(variable);  
$guessWhat = 5;
echo is_string($guessWhat);
echo "<br>";

//6:To check the provided variable or value is an integer  or not -> is_int(variable);  
$IntOrNot = "string";
echo is_int($IntOrNot);
echo "<br>";

//7:To generate random values:- rand();
echo rand();
echo "<br>";


//8:To stop the executing code:- die and exit() [For debugging press].
die;
exit();
echo "<br>";

//9:To returns a part of a string:- subStr(string,start,length).
substr("Hello PhP", 6);
echo "<br>";

?>