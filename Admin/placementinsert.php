<?php 
$conn=mysqli_connect('localhost','root','','project');

$file=$_FILES['img']['name'];
$filesize=$_FILES['img']['size'];
$filetype=$_FILES['img']['type'];
$filename=$_FILES['img']['tmp_name'];

$location='assets/img/';

$name=$_POST['name'];
$post=$_POST['post'];

$ins="INSERT INTO `placementstudent`(`image`, `name`, `post`) VALUES ('$file','$name','$post')";
if(mysqli_query($conn,$ins))
{
    move_uploaded_file($filename,$location.$file);
    echo "<script>alert('File Uploaded Successfully'); window.location.href='placementstudentadd.php'</script>";
}else{
    echo "error";
}

?>