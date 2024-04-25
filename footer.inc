<a href="#toTop" class="btn btn-primary back-to-top" id="back-to-top-link" title="Back to Top" aria-label="Back to Top"><i class="bi bi-arrow-up" aria-hidden="true"></i></a>

</main>

<footer>

    <article class="bg-one py-5 px-2 p-lg-5" aria-label="You, Them, and Us">
        <div class="container-xl">
            <div class="row mb-4">
                <div class="col-lg-4 p-3">
                    <section aria-label="Social Media">
                        <h3 class="header-font mb-4  text-center">
                            <a class="navbar-brand" href="index.php">Millie's Crazy Flowers</a>
                        </h3>
                        <p class="f-italic h5">Legacy of love, caring, and lasting friendship towards one another.</p>
                    </section>
                    <ul class="ul-list display-4 mt-4">
                        <li class="li-horizontal">
                            <a href="https://www.pinterest.com/littlebee0794/_created/" class="sm-color" target="_blank"><i class="bi bi-pinterest" aria-hidden="true"></i></a>
                        </li>
                        <li class="li-horizontal">
                            <a href="https://www.instagram.com/littlebee0714/?hl=en" class="sm-color" target="_blank"><i class="bi bi-instagram" aria-hidden="true"></i></a>
                        </li>
                        <!--
                        <li class="li-horizontal">
                            <a href="#" class="sm-color"><i class="bi bi-facebook"></i></a>
                        </li>
                        -->
                    </ul>
                </div>

                <div class="col-md-6 col-lg-4 p-3 ">
                    <section aria-label="Most recent posts">
                        <h3 class="header-font mb-4 text-center">Recent Posts</h3>
                    </section>
                    <div class="block-8 mb-4 d-flex">
                        <a class="nl-img rounded" style="background-image: url(images/special-day.png);"></a>

                        <ul class="ul-list ms-3">
                            <li class="fs-14">
                                <i class="bi bi-calendar me-1" aria-hidden="true"></i>04.22.24
                                <i class="bi bi-person-fill-check mx-1" aria-hidden="true"></i>Jeanne E.
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
                                <i class="bi bi-calendar me-1" aria-hidden="true"></i>01.28.24
                                <i class="bi bi-person-fill-check mx-1" aria-hidden="true"></i>Anonymous
                            </li>
                            <li>
                                <h6 class="ps-2"><a href="newsletter-jan-2024.php" class="mcf-nl ">Bending Love: The Artistry of Pipe Cleaners</a></h6>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 p-3">
                    <section aria-label="Contact Info">
                        <h3 class="header-font mb-4 text-center">Have a Question?</h3>
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

    
    <?php include 'footer_bottom_navbar.inc'; ?>

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