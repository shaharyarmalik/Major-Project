
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-6 col-md-12">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Add Slider</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <form action="sliderinsert.php" method="POST" enctype="multipart/form-data">
                                            <input type="file" name="img" required><br><br>
                                            <button class="btn btn-success">Add</button>
                                        </form>
                                    </div>
                                </div>
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
