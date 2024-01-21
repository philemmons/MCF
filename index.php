<?php
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<nav class="navbar navbar-expand-lg obframe mb-5 mx-2 mx-lg-5">
  <div class="container">

    <button class="navbar-toggler d-lg-none ms-6" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="topNavbar">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="navbar-brand text-right" href="#">
            <img src="../images/heart-infinity.png" alt="Heart wreath with infinity through the middle." width="50" height="40">
          </a>
        </li>
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
  </div>
</nav>











<?php include_once 'footer.inc' ?>
</body>

</html>