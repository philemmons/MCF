<?php
ob_start();
session_start();  //start or resume an existing session

include_once 'header.inc';
?>

<body>

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

    <main>
        <!-- Hero Section -->
        <section class="container-fluid">
            <div class="row justify-content-center align-items-end mb-5 bg-frame bg-img-tos">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Privacy Policy</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Privacy Policy">
                        <h1 class="header-font pb-4 px-3 px-md-0">Privacy Policy
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <article aria-label="Our Terms">
            <div class="container shadow-wrap">
                <div class="row justify-content-center mb-5">
                    <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                        <div class="p-3 text-bg-light hero-text-border" title="">
                            <section aria-label="Terms of Service">
                                <h2 class="card-title mb-2">MCF's Privacy Policy</h2>
                                <p class="mb-3 text-dark">Last updated: April 24, 2024
                                </p>

                                












                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </article>

    </main>

    <footer>
        <section class="bg-one py-5 px-2 p-lg-5">
            <div class="container-xl">
                <div class="row mb-4">
                    <div class="col-lg-4 p-3">
                        <h2 class="header-font mb-4  text-center">
                            <a class="navbar-brand" href="index.html">Millie's Crazy Flowers</a>
                        </h2>
                        <h5 class="f-italic">Legacy of love, caring, and lasting friendship towards one another.</h5>
                        <ul class="ul-list display-4 mt-4">
                            <li class="li-horizontal">
                                <a href="https://www.pinterest.com/littlebee0794/_created/" class="sm-color" _target="blank" rel="noopener noreferrer"><i class="bi bi-pinterest"></i></a>
                            </li>
                            <li class="li-horizontal">
                                <a href="https://www.instagram.com/littlebee0714/?hl=en" class="sm-color" _target="blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a>
                            </li>
                            <!--
                    <li class="li-horizontal">
                        <a href="#" class="sm-color" _target="blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a>
                    </li>
                    -->
                        </ul>
                    </div>


                    <div class="col-md-6 col-lg-4 p-3 ">
                        <h2 class="header-font mb-4 text-center">Recent Posts</h2>
                        <div class="block-8 mb-4 d-flex">
                            <a class="nl-img rounded" style="background-image: url(images/special-day.png);"></a>

                            <ul class="ul-list ms-3">
                                <li class="fs-14">
                                    <i class="bi bi-calendar me-1"></i>04.22.24
                                    <i class="bi bi-person-fill-check mx-1"></i>Jeanne E.
                                </li>
                                <li>
                                    <h6 class="ps-2"><a href="newsletter-april-2024.php" class="mcf-nl ">Handcrafted Elegance for Every Occasion</a></h6>
                                </li>
                            </ul>
                        </div>

                        <div class="block-8 mb-4 d-flex">
                            <a class="nl-img rounded" style="background-image: url(images/nl-img-jan-2024.png);" alt="Pipe cleaner Valentine Day garland."></a>

                            <ul class="ul-list ms-3">
                                <li class="fs-14">
                                    <i class="bi bi-calendar me-1"></i>01.28.24
                                    <i class="bi bi-person-fill-check mx-1"></i>Anonymous
                                </li>
                                <li>
                                    <h6 class="ps-2"><a href="newsletter-jan-2024.php" class="mcf-nl ">Bending Love: The Artistry of Pipe Cleaners</a></h6>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 p-3">
                        <h2 class="header-font mb-4 text-center">Have a Question?</h2>

                        <div class="block-8 d-flex">
                            <i class="bi bi-map me-2"></i>
                            <ul class="ul-list ms-3">
                                <li>
                                    <p>Valley Springs, California, 95252, USA
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="block-8 d-flex">
                            <i class="bi bi-send me-2"></i>
                            <ul class="ul-list ms-3">
                                <li>
                                    <p>
                                        <a href="mailto:<?php echo getenv('mcf-info-email'); ?>" class="mcf-link  fw-bold"><?php echo getenv('mcf-info-email'); ?> </a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="block-8 d-flex">
                            <i class="bi bi-pencil-square me-2"></i>
                            <ul class="ul-list ms-3">
                                <li>
                                    <p>
                                        <a href="contact-us.php" class="mcf-link  fw-bold">Contact Us</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </section>

        <article aria-label="footer nav bar">
            <!-- Bottom Navbar -->
            <nav class="navbar navbar-expand-lg mcf-navbar-dark" aria-label="Bottom navigation">
                <div class="container">
                    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#bottomNavBar" aria-controls="bottomNavBar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="pe-2">Bottom Menu</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="bottomNavBar">
                        <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link px-2" href="accessibility.php">Accessibility</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2" href="terms-of-service.php">Terms of Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 active" aria-current="page" href="privacy.php">Privacy Policy<span class="visually-hidden">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2" href="sitemap.php">Sitemap</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </article>

        <section id="footer-image">
            <div class="h-100 d-flex align-items-center justify-content-center px-4">
                <p class="fw-bold">Copyright © 2023-<?php echo date('Y') ?> Millie's Crazy Flowers. All Rights Reserved.
                </p>
            </div>
        </section>

    </footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="../js/backToTop.js"></script>
</body>

</html>