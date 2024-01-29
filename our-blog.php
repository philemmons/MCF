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
                        <a class="nav-link  active px-2" href="our-blog.php">Blog<span class="visually-hidden">(current)</span></a>
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
            <div class="row justify-content-center align-items-end mb-5 bg-frame bg-img-blog" title="A blog for all things pipe cleaners and love.">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">HOME&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">BLOG&gt;</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Relevant ideas, stories, and all thing pipe cleaners.">
                        <h1 class="header-font pb-4 px-3 px-md-0">Our Blog
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <?php include_once 'blog.inc'; ?>

    </main>

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