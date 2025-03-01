<?php 
$conn=mysqli_connect('localhost','root','','project');

$sel="SELECT * FROM `slider`";
$r=mysqli_query($conn,$sel);

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
                        <h1 class="mt-4">Show Slider</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>IMAGE</th>
                                            <th>EDIT</th>
                                            <th>DELETE</th>
                        
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    <?php while($res=mysqli_fetch_array($r)){
                                        ?>
                                        <tr>
                                            <td><?php echo $res['id']; ?></td>
                                           <td><img src="assets/img/<?php echo $res['image']; ?>" alt="" height="150" width="100%"></td>
                                           <td><a href="slideredit.php?idd=<?php echo $res['id']; ?>">EDIT</a></td>
                                           <td><a href="sliderdelete.php?idd=<?php echo $res['id']; ?>">DELETE</a></td>
                                        </tr>
                                        <?php }?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
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
