<?php


// print_r($_FILES);

if($_FILES["fileUpload"] ){
    $path = $_FILES["fileUpload"]['name'];
    $uploadPath = "./upload/".$path; //where to upload file
    if( move_uploaded_file($_FILES['fileUpload'] ['tmp_name'],$uploadPath)){
        echo "File uploaded successfully.";
    }
    else{
        echo "Failed to upload file";

    }
   
}
else{
    echo "File not found";
}






?>