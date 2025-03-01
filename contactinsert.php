<?php 
$conn=mysqli_connect("localhost",'root','','project');

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

$ins="INSERT INTO `contactus`(`name`, `email`, `password`) VALUES ('$name','[$email','$password')";

if(mysqli_query($conn,$ins))
{
    echo "<script>alert('Form Submited Successfully');window.location.href='index.php'</script>";
}
else{
    echo "error";
}

?>