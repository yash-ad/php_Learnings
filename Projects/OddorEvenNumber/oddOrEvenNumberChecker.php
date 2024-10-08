<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $number = $_POST['number'];

        if (is_numeric($number)) {
              
                if ($number % 2 == 0) {
                        echo "<p>$number is an even number.</p>";
                } else {
                        echo "<p>$number is an odd number.</p>";
                }
        } else {
                echo "<p>Please enter a valid number.</p>";
        }
}
