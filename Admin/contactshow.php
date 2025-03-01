<?php 
$conn=mysqli_connect('localhost','root','','project');

$sel="SELECT * FROM `contactus`";
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
                        <h1 class="mt-4">Show Contact</h1>
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
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>PASSWORD</th>
                                            <!-- user data ko ham edit nhi karte hain -->
                                            <th>DELETE</th>
                        
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                    <?php while($res=mysqli_fetch_array($r)){
                                        ?>
                                        <tr>
                                            <td><?php echo $res['id']; ?></td>
                                           <td><?php echo $res['name']; ?></td>
                                           <td><?php echo $res['email']; ?></td>
                                           <td><?php echo $res['password']; ?></a></td>
                                           <td><a href="contactdelete.php?idd=<?php echo $res['id']; ?>">DELETE</a></td>
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
