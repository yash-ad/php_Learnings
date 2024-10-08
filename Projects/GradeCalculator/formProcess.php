<?php

if($_SERVER['REQUEST_METHOD'] === "POST"){

    $math = $_POST['math'];
    $science = $_POST['science'];
    $english = $_POST['english'];
    $history = $_POST['history'];
    $computer = $_POST['computer'];


    $totalMarks = $math + $science + $english + $history + $computer;
    $averageMarks = $totalMarks / 5;


if($averageMarks >= 90){
        $grade = 'A - Excellent.';
}
elseif($averageMarks >= 75){{
    $grade = "B - Good.";  
}
    } elseif ($averageMarks >= 60) {
        $grade = "C - Fair";
    } elseif ($averageMarks >= 45) {
        $grade = "D - Improvement.";
    } else {
        $grade = "E - Needs hard work.";
    }
    echo "<h2>Results</h2>";
    echo "<p>Total Marks: $totalMarks</p>";
    echo "<p>Average Marks: $averageMarks</p>";
    echo "<p>Your Grade is: $grade</p>";

}







?>