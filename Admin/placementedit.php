<?php
$conn = mysqli_connect('localhost', 'root', '', 'project');
$id = $_REQUEST['idd'];
$location = 'assets/img/';

$sel = "select * from `placementstudent` where id=$id";

$r = (mysqli_query($conn, $sel));
$res = mysqli_fetch_array($r);

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
                    <h1 class="mt-4">EDIT placement</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Edit placement</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">

                                    <!-- show image in form -->
                                    <img src="assets/img/<?php echo $res['image']; ?>" alt="not_found" style="height: 120px;"><br>
                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" type="text" name="id" required value="<?php echo $res['id']; ?>" />
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="file" name="img" required />
                                                        <label for="inputFirstName">File Upload</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your Name" name="name" required value="<?php echo $res['name']; ?>" />
                                                        <label for="inputLastName">name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="post" required value="<?php echo $res['post']; ?>" />
                                                <label for="inputEmail">Post</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control btn btn-warning" type="submit" name="submit" />
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php
            if (isset($_POST['submit'])) {
                // $sel="select * from `slider` where id=$id";

                // $r=(mysqli_query($conn,$sel));
                // $res=mysqli_fetch_array($r);
                // unlink($location.$res['image']);

                $file = $_FILES['img']['name'];
                $filesize = $_FILES['img']['size'];
                $filetype = $_FILES['img']['type'];
                $filename = $_FILES['img']['tmp_name'];
                $location = 'assets/img/';

                $name = $_POST['name'];
                $post = $_POST['post'];

                $updt = "UPDATE `placementstudent` SET `image`='$file' WHERE id=$id";

                if (mysqli_query($conn, $updt)) {
                    move_uploaded_file($filename, $location . $file);
                    echo "<script>alert('File Updated Successfully');window.location.href='placementstudentshow.php'</script>";
                } else {
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