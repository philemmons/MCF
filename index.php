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


  <section class="d-flex h-rem">
    <div id="bg-left"></div>
    <div id="bg-right"></div>
  </section>

  <div class="container hero-content">
    <div class="row">
      <div class="col-md-6 banner">
        <h1 class="header-font">Millie's Crazy Flowers</h1>
        <h4 class="font-italic">Legacy of love, caring, and lasting friendship towards one another.</h4>
        <p class="py-2"> Our Mogol Artist hand crafts every beautiful flower that no two are alike.</p>
      </div>

      <div class="col-md-6 banner text-center">
        <img src="../images/mcf-wreath.png" class="img-fluid mx-auto" alt="Gorgeous floral wreath shaped like a heart." />
      </div>
    </div>
  </div>


  <section>
    <div class="container-fluid" style="background-color: var(--color-1);">
      <div class="row py-2 border text-white">
        <div class="col-lg-3 p-5 info-1 border border-white">
          <h4 class="header-font">Creative Elements</h4>
          <p>In a whimsical creation, the vibrant colors of the pipe cleaners intertwine with dynamic lines, creating a harmonious composition that explores the elements of art.</p>
        </div>
        <div class="col-lg-3 p-5 info-2 border border-white">
          <h4 class="header-font">Community</h4>
          <p>Exemplifies a holistic approach to supporting and uplifting various charitable endeavors, demonstrating a strong commitment to making a positive impact on the community or society at large.</p>
        </div>
        <div class="col-lg-3 p-5 info-3 border border-white">
          <h4 class="header-font">Expression</h4>
          <p>
            In a unique fusion of traditional Mongol art and contemporary expressionism, the vibrant hues of pipe cleaners blend seamlessly.</p>
        </div>
        <div class="col-lg-3 p-5 info-4 border border-white">
          <h4 class="header-font">We Care</h4>
          <p>We create a welcoming atmosphere for a satisfying experience.</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid" style="background-color: var(--color-11);">
      <div class="row g-0">
        <div class="col-md-6">
          <img src="images/mch-vh.png" class="img-fluid rounded float-end" alt="MCH's Chenille Stems Artist.">
        </div>
        <div class="col-md-6 p-2">
          <div class="card-body">
            <h2 class="card-title header-font mb-4">About Millie's Crazy Flowers</h2>
            <p class="card-text">All our flowers are uniquely created just like our friend Millie, and they express a gentle reminder to those we love.</p>
            <p class="card-text"><small class="text-body-secondary fw-bold">Millie's legacy of friendship is LOVE.</small></p>
          </div>
        </div>

      </div>
    </div>
  </section>


  <?php include_once 'footer.inc' ?>
</body>

</html>