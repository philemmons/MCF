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
                            <a href="#" class="sm-color"><i class="bi bi-pinterest"></i></a>
                        </li>
                        <li class="li-horizontal">
                            <a href="#" class="sm-color"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li class="li-horizontal">
                            <a href="#" class="sm-color"><i class="bi bi-facebook"></i></a>
                        </li>
                    </ul>
                </div>


                <div class="col-md-6 col-lg-4 p-3 ">
                    <h2 class="header-font mb-4 text-center">Recent Posts</h2>
                    <div class="block-8 mb-4 d-flex">
                        <a class="nl-img rounded" style="background-image: url(images/mcf-flower-2.png);"></a>

                        <ul class="ul-list ms-3">
                            <li class="fs-14">
                                <i class="bi bi-calendar me-1"></i>02.14.24
                                <i class="bi bi-person-fill-check mx-1"></i>First name
                            </li>
                            <li>
                                <h6 class="ps-2"><a href="newsletter-feb-2024.php" class="mcf-nl link-offset-1">February Title</a></h6>
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
                                <h6 class="ps-2"><a href="newsletter-jan-2024.php" class="mcf-nl link-offset-1">Bending Love: The Artistry of Pipe Cleaners</a></h6>
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
                                <p>
                                    P.O. Box 5040, Valley Springs, California, 93933, USA</p>
                            </li>
                        </ul>
                    </div>
                    <div class="block-8 d-flex">
                        <i class="bi bi-send me-2"></i>
                        <ul class="ul-list ms-3">
                            <li>
                                <p>
                                    <a href="mailto:<?php echo getenv('mcf-info-email'); ?>" class="mcf-link link-offset-3 fw-bold"><?php echo getenv('mcf-info-email'); ?> </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="block-8 d-flex">
                        <i class="bi bi-pencil-square me-2"></i>
                        <ul class="ul-list ms-3">
                            <li>
                                <p>
                                    <a href="contact-us.php" class="mcf-link link-offset-3 fw-bold">Contact Us</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="footer-image">
        <div class="h-100 d-flex align-items-center justify-content-center px-4">
            <p>Copyright © 2023-<?php echo date('Y') ?> Millie's Crazy Flowers. All Rights Reserved.
            </p>
        </div>
    </section>

</footer>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>