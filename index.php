<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<body>


  <nav class="navbar navbar-expand-lg mcf-navbar-light">
    <div class="container-xl">
      <a class="navbar-brand" href="#">
        <img src="../images/heart-infinity.png" alt="Heart wreath with infinity through the middle." width="50" height="40">
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="pe-2">Menu</span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active px-2" aria-current="page" href="index.php">Home<span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="about-us.php">Our Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="purchase.php">Flowers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="reviews.php">Reviews</a>
          </li>
          <li class="nav-item" style="border-right: none;">
            <a class="nav-link px-2" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="d-flex vh-100">
    <div id="bg-left"></div>
    <div id="bg-right"></div>
  </section>

  <div class="container hero-content">
    <div class="row">
      <div class="col-sm-6 banner">
        <h1 class="header-font">Millie's Crazy Flowers</h1>
        <p>Legacy of love, caring, and lasting friendship from one friend to another.</p>
      </div>

      <div class="col-sm-6 banner text-center">
        <img src="../images/mcf-wreath.png" class="img-fluid mx-auto" alt="Gorgeous floral wreath shaped like a heart." />
      </div>
    </div>
  </div>


  <?php include_once 'footer.inc' ?>
</body>

</html>