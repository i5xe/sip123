<?php
require_once "function.php";
check_login();
?>

<div class="row">
  <div class="col-md-12 "> <?php require "navbar.php"; ?>
</div>
</div>

  <div class="row">
    <div class="col-lg-3 bg-black" > <?php require "sidebar.php"; ?>
</div>
    <div class="col-lg-9 h-100 d-inline-block">

    <main style="margin-top: 55px">
  <div class="container pt-4 cold">
<!-- Carousel wrapper -->
<div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <img src="slide1.jpeg" class="d-block w-100"/>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="slide2.jpeg" class="d-block w-100" />
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img src="slide3.jpeg" class="d-block w-100"/>
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button class="carousel-control-prev" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
  
  </div>
</main>
</div>
</div>
<!--Main layout-->
    <!-- MDB -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>
</body>
</html>