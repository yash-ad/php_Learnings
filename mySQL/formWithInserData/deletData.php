<?php
// Include config file:
include('./config.php');

// SQL prepare query:
$getStudents = $connection->prepare("SELECT * FROM `college-record`");
$getStudents->execute();
$results = $getStudents->fetchAll();

// Display table:
echo "<table border=1>";
echo "<tr>";
echo "<th>Id:</th>";
echo "<th>Name:</th>";
echo "<th>Course:</th>";
echo "<th>Batch:</th>";
echo "<th>Year:</th>";
echo "<th>City:</th>";
echo "</tr>";

// Loop over an array to extract the values:
foreach ($results as $student) {
    echo "<tr>";
    echo "<td>" . $student['id'] . "</td>";
    echo "<td>" . $student['name'] . "</td>";
    echo "<td>" . $student['course'] . "</td>";
    echo "<td>" . $student['batch'] . "</td>";
    echo "<td>" . $student['year'] . "</td>";
    echo "<td>" . $student['city'] . "</td>";
    echo "<td><form method='post'><button name='delete' value=" . $student['id'] . ">Delete</button></form></td>";
    echo "</tr>";
}
echo "</table>";

// Delete data
if (isset($_POST['delete'])){
    $id = $_POST['delete'];
    $student = $connection->prepare("DELETE FROM  `college-record` WHERE id='$id'");

    if ($student->execute()) {
        header('Refresh:0');
        echo "Record deleted successfully";
    } else {
        echo "Operation failed, Please try again later";
    }

}


?>