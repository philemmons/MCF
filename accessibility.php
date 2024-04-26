<?php
ob_start();
session_start();  //start or resume an existing session

include_once 'header.inc';
?>

<body id="toTop">
    <a href="#main-content" class="btn btn-primary btn-skip" aria-label="Go To Main Content">Go To Main Content</a>

    <nav class="navbar navbar-expand-lg mcf-navbar-light" aria-label="main menu">
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


    <!-- Hero Section -->
    <header id="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-end mb-5 bg-frame bg-img-access">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Accessibility</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Accessibility">
                        <section aria-label="Page Intro">
                            <h1 class="bswash-font pb-4 px-3 px-md-0">Accessibility
                            </h1>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>

        <article aria-label="Equal and love">
            <div class="container shadow-wrap">
                <div class="row justify-content-center mb-5">
                    <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                        <div class="p-3 text-bg-light hero-text-border" title="Our belief of inclusiveness nurtures our desire for recovery">
                            <section aria-label="accessibility statement">
                                <h2 class="card-title bswash-font mb-3">MCF's Accessibility Accord</h2>
                                <p class="mb-3 text-dark">millies.crazyflowers.art is committed to creating an inclusive online environment that caters to individuals with disabilities. Through a significant investment of resources, the website aims to make its services easily usable and accessible for everyone, regardless of any disability they may have. This commitment stems from a strong belief in the fundamental rights of all individuals to live with dignity, equality, and independence. By prioritizing accessibility, millies.crazyflowers.art strives to ensure that its platform is welcoming and accommodating to a diverse range of users, fostering an environment where everyone can fully participate and engage with its offerings.</p>
                            </section>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                        <div class="p-3 text-bg-light hero-text-border" title="">
                            <section aria-label="accessibility method">
                                <h2 class="card-title bswash-font mb-3">Accessibility, Inclusion and Belonging</h2>

                                <p class="mb-3 text-dark">millies.crazyflowers.art is committed to surpassing the standards set by the W3C WAI Web Content Accessibility Guidelines 2.1. Leveraging various site checkers, the platform enhances its adherence to the Web Content Accessibility Guidelines (WCAG 2.2), ensuring continuous improvement in accessibility.</p>

                                <h3 class="card-title bswash-font mb-3">Disclaimer
                                </h3>

                                <p class="mb-3 text-dark">millies.crazyflowers.art persists in its endeavors to consistently enhance the accessibility of its website and services, firmly believing that it is our collective ethical duty to enable smooth, accessible, and unimpeded usage for individuals with disabilities.</p>

                                <p class="mb-3 text-dark">While we strive to ensure full accessibility for all pages and content on millies.crazyflowers.art, it's possible that certain content has not yet met the strictest accessibility standards. This could be due to challenges in finding or implementing the most suitable technological solutions.</p>

                                <h3 class="card-title bswash-font mb-3">We care, we really do.
                                </h3>

                                <p class="mb-3 text-dark">If you encounter any challenges or need assistance with any aspect of our website, millies.crazyflowers.art, please don't hesitate to reach out to us. We're here to help and support you in any way we can.</p>

                                <h3 class="card-title bswash-font mb-3">Reach Out</h3>


                                <p class="mb-3 text-dark">If you need to report an accessibility issue, have questions, or require assistance, please reach out to millies.crazyflowers.art technical support using the following contact information: - Email: <a href="mailto:sysadmin@crazyflowers.art" class="mcf-link">ADA request for SysAdmin</a></p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <?php include_once 'our_gallery.inc'; ?>

        <a href="#toTop" class="btn btn-primary back-to-top" id="back-to-top-link" title="Back to Top" aria-label="Back to Top"><i class="bi bi-arrow-up" aria-hidden="true"></i></a>

    </main>


    <footer>
        <article class="bg-one py-5 px-2 p-lg-5" aria-label="You, Them, and Us">
            <div class="container-xl">
                <div class="row mb-4">
                    <div class="col-lg-4 p-3">
                        <section aria-label="Social Media">
                            <h3 class="bswash-font mb-4  text-center">
                                <a class="navbar-brand" href="index.php">Millie's Crazy Flowers</a>
                            </h3>
                            <p class="f-italic h5">Legacy of love, caring, and lasting friendship towards one another.</p>
                        </section>
                        <ul class="ul-list display-4 mt-4">
                            <li class="li-horizontal">
                                <a href="https://www.pinterest.com/littlebee0794/_created/" class="sm-color" target="_blank"><i class="bi bi-pinterest" aria-hidden="true"></i><span class="sr-only">(Opens a new window to Pinterest)</span></a>
                            </li>

                            <li class="li-horizontal">
                                <a href="https://www.instagram.com/littlebee0714/?hl=en" class="sm-color" target="_blank"><i class="bi bi-instagram" aria-hidden="true"></i><span class="sr-only">(Opens a new window to Instagram)</span></a>
                            </li>

                            <li class="li-horizontal">
                                <a href="#" class="sm-color"><i class="bi bi-facebook" aria-hidden="true"></i><span class="sr-only">(Opens a new window to Facebook)</span></a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-md-6 col-lg-4 p-3 ">
                        <section aria-label="Most recent posts">
                            <h3 class="bswash-font mb-4 text-center">Recent Posts</h3>
                        </section>
                        <div class="block-8 mb-4 d-flex">
                            <div class="nl-img rounded" style="background-image: url(images/special-day.png);"></div>

                            <ul class="ul-list ms-3">
                                <li class="fs-14">
                                    <i class="bi bi-calendar me-1" aria-hidden="true"></i>04.22.24
                                    <i class="bi bi-person-fill-check mx-1" aria-hidden="true"></i>Jeanne E.
                                </li>
                                <li>
                                    <p class="ps-2 h6"><a href="newsletter-april-2024.php" class="mcf-nl ">Handcrafted Elegance for Every Occasion</a></p>
                                </li>
                            </ul>
                        </div>

                        <div class="block-8 mb-4 d-flex">
                            <div class="nl-img rounded" style="background-image: url(images/nl-img-jan-2024.png);" alt="Pipe cleaner Valentine Day garland."></div>

                            <ul class="ul-list ms-3">
                                <li class="fs-14">
                                    <i class="bi bi-calendar me-1" aria-hidden="true"></i>01.28.24
                                    <i class="bi bi-person-fill-check mx-1" aria-hidden="true"></i>Anonymous
                                </li>
                                <li>
                                    <p class="ps-2 h6"><a href="newsletter-jan-2024.php" class="mcf-nl ">Bending Love: The Artistry of Pipe Cleaners</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 p-3">
                        <section aria-label="Contact Info">
                            <h3 class="bswash-font mb-4 text-center">Have a Question?</h3>
                        </section>
                        <div class="block-8 d-flex">
                            <i class="bi bi-map me-2" aria-hidden="true"></i>
                            <ul class="ul-list ms-3">
                                <li>
                                    <p>Valley Springs, California, 95252, USA
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="block-8 d-flex">
                            <i class="bi bi-send me-2" aria-hidden="true"></i>
                            <ul class="ul-list ms-3">
                                <li>
                                    <p>
                                        <a href="mailto:<?php echo getenv('mcf-info-email'); ?>" class="mcf-link  fw-bold"><?php echo getenv('mcf-info-email'); ?> </a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="block-8 d-flex">
                            <i class="bi bi-pencil-square me-2" aria-hidden="true"></i>
                            <ul class="ul-list ms-3">
                                <li>
                                    <p>
                                        <a href="contact.php" class="mcf-link  fw-bold">Contact Us</a>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <!-- Bottom Navbar -->
        <nav class="navbar navbar-expand-lg mcf-navbar-dark" aria-label="Bottom Menu">
            <div class="container">
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#bottomNavBar" aria-controls="bottomNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="pe-2">Bottom Menu</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="bottomNavBar">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-2 active" aria-current="page" href="accessibility.php">Accessibility<span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="terms-of-service.php">Terms of Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="privacy.php">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="sitemap.php">Sitemap</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <article id="footer-image" aria-label="Copyright Info">
            <div class="h-100 d-flex align-items-center justify-content-center px-4">
                <p class="fw-bold">Copyright © 2023-<?php echo date('Y') ?> Millie's Crazy Flowers. All Rights Reserved.
                </p>
            </div>
        </article>

    </footer>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="../js/backToTop.js"></script>
</body>

</html>