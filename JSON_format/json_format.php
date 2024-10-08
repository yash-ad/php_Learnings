<?php


//Normal php array:-
$user = ['Name' => 'Yash', 'Age' => 26, 'Email' => 'yashdandnaik@gmail.com'];
print_r($user);


echo "<br/>";
echo "<br/>";

//Convert into a JSON format:-
$data = json_encode($user);
echo "JSON-Format data :".$data;


echo "<br/>";
echo "<br/>";

//Convert JSON format into a normal array:-
$dataArray = json_decode($data,true);
print_r($dataArray);




?>