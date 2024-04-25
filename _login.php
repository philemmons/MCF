<?php
ob_start();
session_start();

if (isset($_SESSION["status"]) && ($_SESSION['status'] == getenv('LOGIN_STATUS'))) {  //Check whether the admin has logged in
  header("Location: _admin.php");
} else {
  $_SESSION["name"] = "Guest";
}

include_once 'header.inc';
include_once 'php/source.php';

$dbConn = getDBConnection();

if (isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header("Location: index.php");
}

?>

<body id="toTop">
  <a href="#main-content" class="btn btn-primary btn-skip" aria-label="Go To Main Content">Go To Main Content</a>
  <nav class="navbar navbar-expand-lg mcf-navbar-light">
    <div class="container-xl">
      <a class="navbar-brand bg-light-subtle p-1 border border-primary" href="index.php">
        <img src="../images/heart-infinity.png" alt="Heart wreath with infinity through the middle." width="50" height="40">
      </a>
      <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="pe-2">Menu</span>
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link px-2" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="our_story.php">Our Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="purchase.php">Purchase</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="newsletter-april-2024.php">Newsletter</a>
          </li>
          <li class="nav-item" style="border-right: none;">
            <a class="nav-link px-2" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main id="main-content">

    <!-- Hero Section -->
    <section class="container-fluid">
      <div class="row justify-content-center align-items-end bg-frame bg-img-login" title="Welcome Admin">
        <div class="col-xl-6 col-lg-7 col-md-9">
          <div class="text-center">
            <p class="fw-bold ">
              <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Login</a>
            </p>
          </div>
          <div class="text-center h1-ls" title="Admin Login">
            <h1 class="header-font pb-4 px-3 px-md-0">Admin Login
            </h1>
          </div>
        </div>
      </div>
    </section>

    <!-- Middle Navbar -->
    <nav class="navbar navbar-expand-lg mb-5 mcf-navbar-dark">
      <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#midNavBar" aria-controls="midNavBar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="pe-2">Admin Menu</span>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="midNavBar">
          <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
            <li class="nav-item" <?php echo (!isset($_SESSION["status"])) ? 'style="border-right: none;"' : ''; ?>>
              <a class="nav-link active px-2" aria-current="page" href="_login.php">Admin Panel<span class="visually-hidden">(current)</span></a>
            </li>
            <?php
            if (isset($_SESSION["status"])) {
              echo '<li class="nav-item">';
              echo '<div role= "form">';
              echo '<form method ="POST"  >';
              echo '<input type="submit" value="LogOut" class="nav-link log-input" name="logout">';
              echo '</form>';
              echo '</div>';
              echo '</li>';
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Part One -->
    <div class="container shadow-wrap">
      <div class="row justify-content-center mb-5">
        <div class="col-xl-7 col-lg-7 col-md-12 py-4">
          <div class="p-3 text-center text-bg-light hero-text-border" title="Please login to continue.">
            <h3 class="fw-bold text-dark px-md-0">Welcome to the Admin Panel
            </h3>
            <div class="d-grid col-md-8 mx-auto p-2">
              <!-- Button trigger modal -->
              <button type="button" class="btn mcf-button mcf-btn-wide" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
              <?php
              if (isset($_POST['login'])) {
                goMain();
              }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body text-bg-light hero-text-border" id="loginModalLabel">

            <form method="POST" class="row g-1 needs-validation" name="loginForm" novalidate>

              <label for="ittLM">Username</label>
              <input type="text" class="form-control" name="formUN" id="ittLM" required>
              <div class="invalid-feedback">
                Required
              </div>

              <label for="itpLM">Password</label>
              <input type="password" class="form-control" name="formPW" id="itpLM" required>
              <div class="invalid-feedback">
                Required
              </div>

              <div class="d-grid col-sm-5 mx-auto pt-3">
                <input type="submit" name="login" value="Login" class="btn mcf-button mcf-btn-wide">
              </div>

              <div class="d-grid col-sm-5 mx-auto pt-3">
                <button type="button" class="btn mcf-button mcf-btn-wide" data-bs-dismiss="modal">Cancel</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    <?php include_once 'footer.inc' ?>

</body>

</html>