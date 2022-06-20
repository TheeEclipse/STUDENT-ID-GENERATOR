<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$folder = "./image/" . $filename;

    $imagefiletype = strtolower(pathinfo($folder , PATHINFO_EXTENSION));
    $check = getimagesize($_FILES['uploadfile']['tmp_name']);
    if ($check !==false){
       // echo '<script>alert("File is an image")</script>';
    $check ["mime"].".";
        $uploadok =1;
    }else{
       // echo '<script>alert("File not an image")</script>';
        $uploadok = 0;
    }
if ( $_FILES['uploadfile']['size']> 5000000){
    //echo '<script>alert("File too large,upload failed")</script>';
    $uploadok = 0;
}
if ($imagefiletype != "jpg" &&
   $imagefiletype != "jpeg" &&  
   $imagefiletype != "png"
){
    //echo '<script>alert("ONLY UPLOAD IMAGES(png,jpeg,jpg)")</script>';
    $uploadok = 0;
} 
if ($uploadok ==0){
    echo '<script>alert("SORRY,PLEASE UPLOAD ONLY IMAGES LESS THAN 5MB IN SIZE AND ONLY png,jpeg and jpg")</script>';
    exit();
}

	$conn = mysqli_connect("localhost", "root", "", """);

	// Get all the submitted data from the form
	$sql = "INSERT INTO image (filename) VALUES ('$filename')";

	// Execute query
	mysqli_query($conn, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
     
		echo '<script>alert("Image Uploaded succesfully")</script>';
        
	} else {
		echo '<script>alert("Failed to upload image")</script>';
	}
}
?>
