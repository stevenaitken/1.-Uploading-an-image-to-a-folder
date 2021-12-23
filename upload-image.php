<?php

include 'includes/errors.php';

if(isset($_POST["submit"])) {

$target_dir = "images/"; //target directory for images

$target_file = $target_dir . basename($_FILES["upload-image"]["name"]); //full pathname of image

//if the image is successfully moved to its new location
    if (move_uploaded_file($_FILES["upload-image"]["tmp_name"], $target_file)) {
  
        echo $target_file; //you can use $target_file var to store path name in the database
    } 
//if the image is not successfully moved to its new location
	else {
        exit("There was an error uploading your file.");
    }
} // end of isset()

?>

