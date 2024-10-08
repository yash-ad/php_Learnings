<?php
if (isset($_POST['button'])) {
    include("/xampp/htdocs/test/mySQL/formWithInserData/config.php");

    

        // Retrieve form data
        $name = $_POST['name'];
        $course = $_POST['course'];
        $batch = $_POST['batch'];
        $city = $_POST['city'];
        $year = $_POST['year'];


        //To check if the inout fields are empty or not:-

        if(empty($name) || empty($course)|| empty($batch) || empty($city)|| empty($year) ){
        echo "All fields are required. Please fill out the entire form.";
        }else{
        // Prepare the SQL query with named placeholders
        $sql = "INSERT INTO `college-record` (`name`, `course`, `batch`, `city`, `year`) VALUES (:name, :course, :batch, :city, :year)";
        $stmt = $connection->prepare($sql);


        // Execute the statement with an associative array of parameters with key and value pairs:-
        $stmt->execute([
            ':name' => $name,
            ':course' => $course,
            ':batch' => $batch,
            ':city' => $city,
            ':year' => $year
        ]);


        // Check if it is working or not:-
      if($stmt){
            echo "<script>
            alert('Data inserted sucessfully');
document.getElementById('formId').reset(); // Clear form fields
            </script>
            ";
        }else {
            echo "Operation failed";
        }



        //Close the connection 
        $connection = null;
        };
}
?>
