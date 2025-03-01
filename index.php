<?php
$conn = mysqli_connect("localhost", 'root', '', 'project');
$sel = "SELECT * FROM `placementstudent`";
$r = mysqli_query($conn, $sel);



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('head.php');
  ?>
</head>

<body>
  <!-- Nav Bar -->
  <div class="container-fluid p-0">
    <?php
    include('nav.php');
    ?>
  </div>

  <!-- Slider Or carousel -->

  <div class="container-fluid p-0">
    <div class="col-sm-12">
      <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="IMAGE/slider1.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="IMAGE/slider2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="IMAGE/slider3.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>

  <!-- Card -->
  <div class="container-fluid mt-3">
    <h1 class="text-center">Plcament Student</h1>
    <div class="row">

      <?php while ($res = mysqli_fetch_array($r)) {
      ?>
        <div class="col-sm-3 mt-5">
          <div class="card" style="width: 18rem;">
            <img src="Admin/assets/img/<?php echo $res['image'] ?>" class="card-img-top" alt="..." style="height: 300px;">
            <div class="card-body">
              <div class="card-titel">
                <h3><?php echo $res['name']  ?></h3>
              </div>
              <p class="card-text"><?php echo $res['post'] ?></p>
            </div>
          </div>
        </div>

      <?php  } ?>

    </div>

    <!-- card end -->

    <!-- contact form start -->
    <div class="container mt-2">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center text-danger">Contact Us</h1>
        </div>
      </div>
    </div>

    <!-- form -->

    <div class="container mt-2">
      <div class="row">
        <div class="col-sm-12">
          <form action="contactinsert.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputName" class="form-label">Enter Name</label>
              <input type="text" class="form-control" id="exampleInputName" aria-describedby="namelHelp" name="name">

            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">

            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>


  </div>
  <?php
  include('footer.php');
  ?>
</body>

</html>