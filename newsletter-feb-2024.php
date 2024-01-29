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
                        <a class="nav-link px-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="about-us.php">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="purchase.php">Crazy Flowers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  active px-2" href="newsletter-feb-2024.php">Newsletter<span class="visually-hidden">(current)</span></a>
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
            <div class="row justify-content-center align-items-end mb-5 bg-frame bg-img-newsletter" title="A newsletter for all things pipe cleaners and love.">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">HOME&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">NEWSLETTER&gt;</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Relevant ideas, stories, and all thing pipe cleaners.">
                        <h1 class="header-font pb-4 px-3 px-md-0">Our Newsletter
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section One -->
        <section class="px-3 px-lg-5 pt-3 pt-lg-5 mb-5" style="background-color: var(--color-1);">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12 my-2 my-lg-3 pt-5">
                        <div class="card-body">
                            <p class="card-text  mb-1 tt-upper">Our Newsletter</p>
                            <h2 class="card-title header-font mb-3">Latest Article</h2>
                        </div>
                    </div>
                </div>

                <div class="row pt-4 mb-5">
                    <article class="col-lg-8 col-sm-12 px-3 px-lg-5">
                        <figure class="figure">
                            <img src="../images/img-placeholder.jpg" class="figure-img img-fluid" alt="Tropical beach image placeholder.">
                            <figcaption><small> Published 02-14-2024</small>
                        </figure>
                        <h3>Page 1 - Newsletter Title Here - February</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.
                        </p>
                        <p class="mb-3 mb-lg-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>

                        <h3>Newsletter Title Part 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis et doloribus unde architecto optio laboriosam porro adipisci sapiente officiis nemo accusamus ad praesentium? Esse minima nisi et. Dolore perferendis, enim praesentium omnis, iste doloremque quia officia optio deserunt molestiae voluptates soluta architecto tempora.</p>

                        <figure class="figure">
                            <img src="../images/img-placeholder.jpg" class="figure-img img-fluid" alt="Tropical beach image placeholder.">
                        </figure>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, eius mollitia suscipit, quisquam doloremque distinctio perferendis.</p>

                        <ul class="keywords m-2">
                            <li class="nl-keyword">
                                mogol Art
                            </li>
                            <li class="nl-keyword">
                                pipe cleaners
                            </li>
                            <li class="nl-keyword">
                                handmade craft
                            </li>
                            <li class="nl-keyword">
                                expressionism
                            </li>
                        </ul>

                        <nav aria-label="newsletter navigation" class="col-12 pb-3 pb-lg-5">
                            <ul class="pagination justify-content-end">
                                <li class="page-item disabled">
                                    <a class="page-link">Previous</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="newsletter-feb-2024.php">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="newsletter-jan-2024.php">2</a>
                                </li>
                                <li class="page-item ">
                                    <a class="page-link" href="newsletter-jan-2024.php">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </article>

                    <?php include_once 'newsletter-right-col.inc'; ?>

                </div>
            </div>
        </section>

    </main>

    <?php include_once 'footer.inc' ?>

    <script src="../js/script.js"></script>


</body>

</html>