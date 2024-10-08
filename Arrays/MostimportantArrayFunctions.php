<?php

///.Most important array function:-

$fruit = ["Name" => "Apple", "Flavour" => "Sweet and citrus", "Color" => "Red"];
// $fruit = "Apple";
print_r($fruit);
echo "<br/>";
echo "<br/>";
//1:is_array():- This method or function it shows that its an array or not.
$arrayOrNot = is_array($fruit);
// $arrayOrNot = is_array($fruit);
print_r($arrayOrNot);
echo "<br/>";
echo "<br/>";
//2:count():- To count an array elements.
$countElements = count($fruit);
echo $countElements;
echo "<br/>";
echo "<br/>";
//3:unset():- To extract or remove elements from an array.
$users = ["Yash", "Rajiv", "Anil", "Sam"];
unset($users[2]);
print_r($users);
echo "<br/>";
echo "<br/>";
//4:array_push():- Add element at the end of an array:-
array_push($users, "Bruce");
print_r($users);
echo "<br/>";
echo "<br/>";
//5:array_pop():- Removes element at the end of an array.
array_pop($users);
print_r($users);
echo "<br/>";
echo "<br/>";
//6:array_keys():-
echo "keys of an array of fruit";
print_r(array_keys($fruit));
echo "<br/>";
echo "<br/>";
//7:implode():-Array convert into a string.

echo "Array convert into a string ";
print_r(implode($users));
echo "<br/>";
echo "<br/>";
//8:array_merge():-Merge an arrays and convert into a single array.
$mergedArray = array_merge($fruit, $users);
echo "Merged Array";
print_r($mergedArray);
echo "<br/>";
echo "<br/>";

//9:array_unique():-Remove duplicate elements from an array.
$users = ["Yash", "Rajiv", "Anil", "Sam","Rajiv","Tony","Yash"];
echo "Remove duplicate elements from an array ";
$uniqueArray = array_unique($users);
print_r($uniqueArray);
?>