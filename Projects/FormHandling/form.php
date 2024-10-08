<?php

//If there is a post request and the submit button is clicked then display the data on a screen.
if (isset($_POST['button'])) {


    //Variables initialization:-
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : 'Not specified';
    $skills = isset($_POST['skills']) ? $_POST['skills'] : [];
    $city = $_POST['city'];
    $bio = $_POST['bio'];



    //Display Form data:-
    echo "The candidate name is : " . $name;
    echo '<br/>';
    echo '<br/>';
    echo "The candidate email is : " . $email;
    echo '<br/>';
    echo '<br/>';
    if (count($skills) > 1) {
        echo "The candidate skills are : " . implode(', ', $skills);
    } elseif (count($skills) == 0) {
        echo "No skills selected.";
    } else {
        echo
        "The candidate skill is : " . implode(', ', $skills);
    }
    echo '<br/>';
    echo '<br/>';
    echo "The candidate gender is : " . $gender;
    echo '<br/>';
    echo '<br/>';
    echo "The candidate city is : " . $city;
    echo '<br/>';
    echo '<br/>';
    echo "The candidate bio is : " . $bio;
}
;