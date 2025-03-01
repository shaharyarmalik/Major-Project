<?php 
$conn=mysqli_connect('localhost','root','','project');
session_start();

$email=$_POST['email'];
$password=$_POST['password'];

$sel="select * from `login` where EMAIL='$email' and PASSWORD='$password'";

$result=mysqli_query($conn,$sel);
if(mysqli_num_rows($result)>0)
{
    $res=mysqli_fetch_array($result);
    $name=$res['NAME'];
    $_SESSION['NAME']=$name;
    header('location:index.php');
}else{
    echo "<script>alert('Invalid Eimail Ans Password');window.location.href='Login.php'</script>";
}
?>