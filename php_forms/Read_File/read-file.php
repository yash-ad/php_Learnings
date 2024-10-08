<?php

//Read a file with static data:-

// //Create file path:-
// $file = "files/fileOne.txt";

// ///Create a variable and store the file into it:-
// //fopen():- Function or method is used for opening a file;
// //It takes two parameters the first is file path and the second is what we want to do with the file.
// $myFile = fopen($file, "r");

// //fread():- Function or method is used for reading a file;
// //It takes two parameters the first is file name and the second is file size that means file path
// echo fread($myFile, filesize($file));

// //fclose():- Function or method is used for closing a file;
// fclose($myFile);


if (isset($_FILES['file'])) {
    $file = $_FILES['file']['tmp_name'];
//For opening the file into the read mode.
    $myFile = fopen($file, "r") or die("Unable to read file");
//For reading the file and  display the content.  
    echo fread($myFile, $_FILES['file']['size']);
//For closing the file.
    fclose($myFile);
}

?>

<form method="post" action="" enctype="multipart/form-data">
    <input type="file" name="file" />
    <br />
    <br />
    <button>Read File</button>
</form>