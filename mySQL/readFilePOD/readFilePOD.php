<?php

include("/xampp/htdocs/test/mySQL/readFilePOD/config.php");
//Get data from the server:-
$getStudents = $connection->prepare("SELECT * FROM `college-record`");
$getStudents->execute();
$students = $getStudents->fetchAll();
// print_r($students);


//Add table tag to display the table:-


echo "<table border=1>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Course</th>";
echo "<th>Batch</th>";
echo "<th>City</th>";
echo "<th>Year</th>";
echo "</tr>";

foreach($students as $student){
    echo "<tr>";
    echo "<td>";
    echo $student['name'];
    echo "</td>";
    echo "<td>";
    echo $student['course'];
    echo "</td>";
    echo "<td>";
    echo $student['batch'];
    echo "</td>";
    echo "<td>";
    echo $student['city'];
    echo "</td>";
    echo "<td>";
    echo $student['year'];
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>