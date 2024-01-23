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
            <a class="nav-link active ps-3" aria-current="page" href="index.php">Home<span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-3" href="purchase.php">Catalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-3" href="about-us.php">Our Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-3" href="reviews.php">Reviews</a>
          </li>
          <li class="nav-item">
            <a class="nav-link ps-3" href="donate.php">Donation</a>
          </li>
          <li class="nav-item" style="border-right: none;">
            <a class="nav-link ps-3" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="hero-wrap">
    <div class="overlay"></div>
    <div class="img" style="background-image: url(images/bg_2.jpg);"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center align-items-stretch">
        <div class="col-md-6 col-lg-6 text d-flex align-items-center">
          <div class="desc">
            <h1 class="">Best Design of <span>Furniture Collections</span></h1>
            <div class="w-75">
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p class="d-flex align-items-center mt-4">
                <a href="#" class="btn btn-white d-flex align-items-center py-3 px-4">Discover</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="d-flex vh-100">
    <div id="bg-left">A</div>
    <div id="bg-right">B</div>
  </section>


  <div class="row">
    <div class='col-sm-6 banner df-auto' id='bg-left'>



      <div>
        <h1 class="header-font">Millie's Crazy Flowers</h1>
        <p>Legacy of love, caring, and lasting friendship from one friend to another.</p>
      </div>
    </div>
    <div class='col-sm-6 banner df-auto' id='bg-right'>

      <div>
        <img src="../images/beautiful-heart-love.png" class="img-fluid " alt="Wreath shaped like a heart with an infinite symbol through it." />
      </div>
    </div>

  </div>
  </div>




  <?php include_once 'footer.inc' ?>
</body>

</html>