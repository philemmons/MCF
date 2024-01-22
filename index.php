<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<body>
  <section class="bg-color-left">
   
      <nav class="navbar navbar-expand-lg ftco-navbar-light">
        <div class="container-xl">
          <a class="navbar-brand" href="#">
            <img src="../images/heart-infinity.png" alt="Heart wreath with infinity through the middle." width="50" height="40">
          </a>

          <button class="navbar-toggler d-lg-none m-spec" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="topNavbar">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home<span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="purchase.php">Catalog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about-us.php">Our Story</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reviews.php">Reviews</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="donate.php">Donation</a>
              </li>
              <li class="nav-item" style="border-right: none;">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
      
      </nav>




      <div class="row">
        <div class='col-sm-6 banner'>



          <div>
            <h1 class="header-font">Millie's Crazy Flowers</h1>
            <p>Legacy of love, caring, and lasting friendship from one friend to another.</p>
          </div>
        </div>
        <div class='col-sm-6 banner'>

          <div>
            <img src="../images/beautiful-heart-love.png" class="img-fluid " alt="Wreath shaped like a heart with an infinite symbol through it." />
          </div>
        </div>

      </div>
    </div>
  </section>



  <?php include_once 'footer.inc' ?>
</body>

</html>