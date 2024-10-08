<?php

include('./config.php');
//Prepare sql query
$getStudents = $connection->prepare("SELECT id,name FROM `college-record`");
$getStudents->execute();
$studentsData = $getStudents->fetchAll();
// print_r($studentsData);
echo "<select>";
echo "<option disabled selected>Select name</option>";
forEach($studentsData as $student){
    echo "<option ".$student['id']." >".$student['name']."</option>"; 
}
echo "</select>";









?>