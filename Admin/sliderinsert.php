<?php 
// Database Connection 
$conn=mysqli_connect('localhost','root','','project');

// file input name value get
$file=$_FILES['img']['name'];
$filetype=$_FILES['img']['type'];
$filesize=$_FILES['img']['size'];
$filename=$_FILES['img']['tmp_name'];

// file upload in folder 
$location='assets/img/';

$ins="INSERT INTO `slider`(`image`) VALUES ('$file')";

if(mysqli_query($conn,$ins))
{
    move_uploaded_file($filename,$location.$file);
    echo "<script>alert('File Uploaded');window.location.href='slideradd.php'</script>";
}
else{
    echo "error";
}
?>