<?php 
$conn=mysqli_connect('localhost','root','','project');
$id=$_REQUEST['idd'];
$location='assets/img/';

$sel="select * from `placementstudent` where id=$id";
$res=mysqli_query($conn,$sel);
$r=mysqli_fetch_array($res);

unlink($location.$r['image']);

$del="DELETE FROM `placementstudent` WHERE id=$id";
if(mysqli_query($conn,$del))
{
    echo  "<script>alert('File Delete Successfully');window.location.href='placementstudentshow.php'</script>";
}else{
    echo "error";
}


?>