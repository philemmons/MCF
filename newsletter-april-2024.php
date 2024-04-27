<?php
ob_start();
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<body id="toTop">
    <a href="#main-content" class="btn btn-primary btn-skip" aria-label="Go To Main Content">Go To Main Content</a>

    <nav class="navbar navbar-expand-lg mcf-navbar-dark" aria-label="main menu">
        <div class="container-xl">
            <a class="navbar-brand bg-light-subtle p-1 border border-primary" href="/">
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
                        <a class="nav-link  active px-2" href="newsletter-april-2024.php" aria-current="page">Newsletter<span class="visually-hidden">(current)</span></a>
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
            <div class="row justify-content-center align-items-end mb-5 bg-frame bg-img-newsletter" title="A newsletter for all things pipe cleaners and love.">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Newsletter&gt;</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Relevant ideas, stories, and all thing pipe cleaners.">
                        <section aria-label="Page Intro">
                            <h1 class="bswash-font pb-4 px-3 px-md-0">Our Newsletter
                            </h1>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>
        <!-- Section One -->
        <article aria-label="April Newsletter">
            <div class="px-3 px-lg-5 pt-3 pt-lg-5 mb-5" style="background-color: var(--color-1);">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-lg-12 my-2 my-lg-3 pt-5">
                            <div class="card-body">
                                <p class="card-text  mb-1 tt-upper">Our Newsletter</p>
                                <h2 class="card-title bswash-font mb-3">Latest Article</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row pt-4 mb-5">
                        <div class="col-lg-8 col-sm-12 px-3 px-lg-5">
                            <figure class="figure">
                                <img src="../images/special-day.png" class="figure-img img-fluid shadow" alt="Hand written Special Day logo with a red heart.">
                                <figcaption><small> Published 04-22-2024</small>
                            </figure>
                            <section aria-label="Current Article">
                                <h3>Introducing Millie's Crazy Flowers: Handcrafted Elegance for Every Occasion - April</h3>
                                <p>Millie's Crazy Flowers offer a whimsical and delightful addition to any occasion. Priced at $12.50 each, these handcrafted wonders are not only affordable but also come with a special offer: buy two and get one free! Need to deck out a large event? No problem. While each flower is meticulously crafted by hand, we are dedicated to fulfilling even the most sizable orders with care and precision. Furthermore, we are more than happy to support your cause by offering donations for specific events. Simply reach out to us via our contact form, providing details of your organization, contact person, event address, and required donation date. We'll promptly get in touch, ensuring a seamless delivery five days prior to your event. And don't worry about color preferences; our talented artists will strive to meet your specifications. Your satisfaction is our priority. So, whether it's brightening up your space or supporting a worthy cause, Millie's Crazy Flowers are here to make your moments even more memorable.
                                </p>
                            </section>
                            <!--
                            <p class="mb-3 mb-lg-5">More info here</p>
                            <h3>Newsletter Title Part 2</h3>
                            <p>Even more info</p>
                            -->
                            <figure class="figure">
                                <img src="../images/mcf-flower-6.png" class="figure-img img-fluid shadow" alt="The flowers could be displayed against a clean, neutral background to emphasize their beauty and elegance.">
                            </figure>
                            <p>Buy Two, Get One Free - A vibrant bouquet of Millie's Crazy Flowers arranged in a decorative vase, showcasing their colorful petals and intricate handcrafted details.</p>

                            <ul class="keywords m-2">
                                <li class="nl-keyword">
                                    millie's crazy flowers
                                </li>
                                <li class="nl-keyword">
                                    handcrafted
                                </li>
                                <li class="nl-keyword">
                                    occasion
                                </li>
                                <li class="nl-keyword">
                                    special offer
                                </li>
                                <li class="nl-keyword">
                                    donation
                                </li>
                            </ul>

                            <nav aria-label="newsletter navigation" class="col-12 pb-3 pb-lg-5">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="newsletter-april-2024.php">Previous</a>
                                    </li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="newsletter-april-2024.php">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="newsletter-jan-2024.php">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="newsletter-jan-2024.php">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                        <?php include_once 'newsletter-right-col.inc'; ?>

                    </div>
                </div>
            </div>
        </article>

        <?php include_once 'footer.inc' ?>

        <script src="../js/script.js"></script>

</body>

</html>