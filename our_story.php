<?php
ob_start();
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>Millie's Crazy Flowers - Our Story</title>";
include_once 'header-bottom.inc'
?>

<body id="toTop">
    <a href="#main-content" class="btn btn-primary btn-skip" aria-label="Go To Main Content">Go To Main Content</a>

    <nav class="navbar navbar-expand-lg mcf-navbar-light" aria-label="main menu">
        <div class="container-xxl">
            <a class="navbar-brand" href="/">
                <p class="mcf-logo-title h4"><img src="../images/heart-infinity.png" alt="Heart wreath with infinity through the middle." class="pe-2">Millie's Crazy Flowers</p>

            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#topNavbar" aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="pe-2">MENU</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="topNavbar">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-2" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active px-2" href="our_story.php" aria-current="page">Our Story<span class="visually-hidden">(current)</span></a>
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

    <header id="main-content">
        <!-- Hero Section -->
        <div class="container-fluid">
            <div class="row justify-content-center align-items-end mb-5 bg-frame bg-img-ourStory" title="Welcome to story, the long and short of it.">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Our Story&gt;</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Yes, the long and the short of it.">
                        <section aria-label="Page Intro">
                            <h1 class="bswash-font pb-4 px-3 px-md-0">Our Story
                            </h1>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>

        <article class="px-3 px-lg-5 pt-3 pt-lg-5 mb-5" style="background-color: var(--color-1);" aria-label="Friendship Story">
            <div class="container pb-5">
                <div class="row justify-content-center">
                    <div class="col-md-4 my-2 my-lg-5 text-center">
                        <img src="images/mcf-vh.png" class="img-fluid rounded" alt="MCF's Chenille Stems Artist.">
                    </div>
                    <div class="col-md-7  my-2 my-lg-5">
                        <div class="card-body">
                            <p class="card-text  mb-1 tt-upper text-center">About Millie's Crazy Flowers</p>
                            <section aria-label="About Millie's Crazy Flower">
                                <h2 class="card-title bswash-font mb-4 text-center">This is our friendship story, the short of it.</h2>
                                <p class="card-text">The Crazy Flowers were showcased at Millie H. celebration of life on May 7th, 2023, because it was a gentle reminder of the love, caring, and lasting friendship from Victoria. Victoria - 'The Vickster' and Millie - 'The Milster' always had fun when they were together by sharing pizza, watching movies, shopping, and just hanging out. Victoria's contribution was expressed by creating one of a kind, twisted colors of pipe cleaners, into beautiful petals, just like her friend. </p>
                                <p class="card-text">
                                    Millie's Legacy of friendship is love, compassion, and laughter. Victoria is honoring her by sharing them with everyone.
                                </p>
                                <p class="card-text">
                                    Under Millie's Legacy, 50% of all proceeds will be donated to charity, <a href="https://www.crossingbridgestrc.org/" class="mcf-link  fw-bold" target="_blank" rel="noopener noreferrer">Crossing Bridges Therapeutic Riding Center<span class="sr-only">(Opens a new window)</span></a> that will provide sponsorship for the special needs and <a href="https://soor.org/give/" class="mcf-link  fw-bold" target="_blank" rel="noopener noreferrer">Special Olympics Oregon<span class="sr-only">(Opens a new window)</span></a> that "empowers athletes to exceed their personal bests on and off the playing field."
                                </p>
                                <p class="card-text">
                                    The loving friendship between 'The Vickster' and 'The Milster' will help the most vulnerable grow compassionately, find happiness, and have fun.
                                </p>
                            </section>

                            <div class="text-center pt-5">
                                <a href="contact.php" class="btn mcf-button p-3 fs-5">Contact Us</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </article>

        <?php include_once 'tech-stats.inc'; ?>

        <?php //include_once 'testimonials.inc'; 
        ?>

        <article class="px-3" aria-label="Customer Service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 my-2 my-lg-5 pt-3">
                        <div class="card-body px-5 mb-5">
                            <p class="card-text  mb-1 tt-upper text-center">Why buy from us?</p>
                            <section aria-label="Our Guarantee">
                                <h2 class="card-title bswash-font mb-3 text-center">Happiness Guarantee</h2>
                            </section>
                        </div>
                        <p class="card-text px-5">Our main priority here at Millie's Crazy Flowers is <em>your</em> happiness. Which means we stand by our product 100% with you, no matter what, no questions asked, no hesitations, no ifs, no ands, no buts. If you have an issue, we will make it right. Refund it. Send you new flowers. Whatever it takes. Just reach out to our Customer Happiness Unit. We're here for you. Happiness. Guarantee.</p>
                        <p class="card-text px-5 pb-4">MCF's Customer Happiness Unit is your go-to when you need a suggestion, a refund, or just a reason to smile. Seriously, reach out. Even just to say hallo.</p>

                    </div>
                    <div class="row text-center">
                        <div class="col-sm-6 pb-3 pb-sm-5">
                            <a href="contact.php" class="btn mcf-button p-3 fs-5">Contact Us</a>
                        </div>
                        <div class="col-sm-6 pb-5">
                            <a href="terms-of-service.php#hgrp" class="btn mcf-button p-3 fs-5">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>

        </article>

        <?php include_once 'footer.inc' ?>

        <script src="../js/script.js"></script>

        <script>
            /**
             * source
             * https://codepen.io/r-gine-vienny-lehmann/pen/GbGbMJ
             */
            var isAlreadyRun = false;

            $(window).scroll(function() {

                $('.counter-show').each(function(i) {

                    var bottom_of_object = $(this).position().top + $(this).outerHeight() / 2;
                    var bottom_of_window = $(window).scrollTop() + $(window).height();

                    if (bottom_of_window > (bottom_of_object + 20)) {
                        if (!isAlreadyRun) {
                            $('.count-number').each(function() {

                                $(this).prop('Counter', 0).animate({
                                    Counter: $(this).text()
                                }, {
                                    duration: 3500,
                                    easing: 'swing',
                                    step: function(now) {
                                        $(this).text(Math.ceil(now));
                                    }
                                });
                            });
                        }
                        isAlreadyRun = true;
                    }
                });

            });
        </script>

</body>

</html>