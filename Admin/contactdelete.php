<?php 
$conn=mysqli_connect('localhost','root','','project');
$id=$_REQUEST['idd'];


$sel="select * from `contactus` where id=$id";
$res=mysqli_query($conn,$sel);
$r=mysqli_fetch_array($res);


$del="DELETE FROM `contactus` WHERE id=$id";
if(mysqli_query($conn,$del))
{
    echo  "<script>alert('File Delete Successfully');window.location.href='contactshow.php'</script>";
}else{
    echo "error";
}


?>