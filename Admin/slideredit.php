<?php 
$conn=mysqli_connect('localhost','root','','project');
$id=$_REQUEST['idd'];
$location='assets/img/';

$sel="select * from `slider` where id=$id";

$r=(mysqli_query($conn,$sel));
$res=mysqli_fetch_array($r);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
       <?php 
       include('head.php');
       ?>
    </head>
    <body class="sb-nav-fixed">
        <?php 
        include('topbar.php');
        ?>
        <div id="layoutSidenav">
          <?php 
          include('sidebar.php');
          ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">EDIT SLIDER</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Edit Slider</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        
                                    <img src="assets/img/<?php echo $res['image']; ?>" alt="not_found" style="height: 120px;" ><br>
                                    <form action="#"  method="POST" enctype="multipart/form-data">
                                            <input type="text" value="<?php echo $res['id']; ?>"><br><br>
                                            <input type="file" name="img" required><br><br>
                                            <button class="btn btn-success" name="submit">Submit</button>
                                             <!-- <input type="submit" class="btn btn-success" name="submit"> -->
                                        </form>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php 
       if(isset($_POST['submit']))
       {
            $sel="select * from `slider` where id=$id";

            $r=(mysqli_query($conn,$sel));
            $res=mysqli_fetch_array($r);
            unlink($location.$res['image']);
        
            $file=$_FILES['img']['name'];
            $filesize=$_FILES['img']['size'];
            $filetype=$_FILES['img']['type'];
            $filename=$_FILES['img']['tmp_name'];
            
            $location='assets/img/';

            $updt="UPDATE `slider` SET `image`='$file' WHERE id=$id";

            if(mysqli_query($conn,$updt))
            {
                move_uploaded_file($filename,$location.$file);
                echo "<script>alert('File Updated Successfully');window.location.href='slidershow.php'</script>";

                
            }
            else{
                echo "error";
            }


       }
       ?>
                <?php 
                include('footer.php');
                ?>
            </div>
        </div>
       <?php 
       include('script.php');
       ?>

    </body>
</html>
