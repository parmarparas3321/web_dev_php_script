<?php


$targetDirectory = "upload/";
$targetFile = $targetDirectory.basename($_FILES["file"]["name"]);

$up=move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile);

$conn = mysqli_connect("localhost","root","","demo");

$query="INSERT INTO `my_img`(`filename`) VALUES ('$targetFile')";

$execute_query = mysqli_query($conn,$query);

if($up==TRUE)
{
    echo "<script>alert('File uploaded')</script>";
}
else{
    echo "<script>alert(' Error File uploaded')</script>";
}
?>