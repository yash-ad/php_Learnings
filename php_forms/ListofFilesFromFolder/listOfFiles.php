<?php
$path = "files";
$items = scandir($path);
// print_r($items);
$items = array_diff($items, array(".", ".."));

//Lets loop over the array using 'forEach' loop:-

foreach($items as $item){
    echo "<a href=./files/$item>$item</a>";
    echo "<br/>";
    echo "<br/>";
}


?>