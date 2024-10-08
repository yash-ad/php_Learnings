<?php
// PHP Associative Arrays:-
// Associative arrays are arrays that use named keys that you assign to them.


$userDetails = [
    "My name" => "Yash",
    "age" => "26 yrs old",
    "my emailId" => "Yashdandnaik5@gmail.com",
    "city" => "Pune",
    "State" => "Maharashtra",
];


//Lets print the details using forEach loop with key and value pairs:-

foreach($userDetails as $key=>$data){
    echo $key." is ".$data;
    echo "<br>";
};




?>