<?php 
session_start();
if(!isset($_SESSION['NAME']))
{
    header('location:Login.php');
    exit();
}


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
                        <h1 class="mt-4">Add Placement Student</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <hr>
                        <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action="placementinsert.php" method="POST" enctype="multipart/form-data">
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="file"  name="img" required/>
                                                        <label for="inputFirstName">File Upload</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your Name" name="name" required/>
                                                        <label for="inputLastName">name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="post" name="post" required/>
                                                <label for="inputEmail" >Post</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control btn btn-primary" type="submit"/>
                                               
                                            </div>
                                            
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
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
