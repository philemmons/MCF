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

        <section class="px-3 px-lg-5 pt-3 pt-lg-5" style="background-color: var(--color-1);">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12 my-2 my-lg-3 pt-5">
                        <div class="card-body">
                            <p class="card-text  mb-1 tt-upper">Our Blog</p>
                            <h2 class="card-title header-font mb-3">Recent From Blog</h2>
                        </div>
                    </div>
                </div>


                <div class="row row-cols-1 row-cols-lg-2 g-2 p-3 p-lg-5">
                    <div class="col">
                        <div class="card border-0 blog-1 rounded-0">
                            <div class="row g-0">
                                <div class="col-sm-6 text-center">
                                    <img src="images/mcf-flower-3.png" class="img-fluid" alt="MCF's Chenille Stems flower three.">
                                </div>
                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <p class="card-text d-flex">
                                        <ul class="ul-list ms-3">
                                            <li>
                                                <i class="bi bi-person-fill-check mx-1"></i>Admin
                                                <i class="bi bi-calendar mx-1"></i>01.21.24
                                            </li>
                                            <li>
                                                <i class="bi bi-chat-dots-fill mx-1"></i>Comments
                                            </li>
                                        </ul>
                                        </p>
                                        <h4 class="card-title"><a href="our-blog.php" class="mcf-blog">Card title</a></h4></a>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card border-0 blog-1 rounded-0">
                            <div class="row g-0">
                                <div class="col-sm-6 text-center">
                                    <img src="images/mcf-flower-3.png" class="img-fluid" alt="MCF's Chenille Stems flower three.">
                                </div>
                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <p class="card-text d-flex">
                                        <ul class="ul-list ms-3">
                                            <li>
                                                <i class="bi bi-person-fill-check mx-1"></i>Admin
                                                <i class="bi bi-calendar mx-1"></i>01.21.24
                                            </li>
                                            <li>
                                                <i class="bi bi-chat-dots-fill mx-1"></i>Comments
                                            </li>
                                        </ul>
                                        </p>
                                        <h4 class="card-title"><a href="our-blog.php" class="mcf-blog">Card title</a></h4></a>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                   <!-- <div class="col">
                        <div class="card border-0 blog-1 rounded-0">
                            <div class="row g-0">
                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <p class="card-text d-flex">
                                        <ul class="ul-list ms-3">
                                            <li>
                                                <i class="bi bi-person-fill-check mx-1"></i>Admin
                                                <i class="bi bi-calendar mx-1"></i>01.21.24
                                            </li>
                                            <li>
                                                <i class="bi bi-chat-dots-fill mx-1"></i>Comments
                                            </li>
                                        </ul>
                                        </p>
                                        <h4 class="card-title"><a href="our-blog.php" class="mcf-blog">Card title</a></h4></a>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <img src="images/mcf-flower-3.png" class="img-fluid" alt="MCF's Chenille Stems flower three.">
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col">
                        <div class="card border-0 blog-1 rounded-0">
                            <div class="row g-0">
                                <div class="col-sm-6">
                                    <div class="card-body">
                                        <p class="card-text d-flex">
                                        <ul class="ul-list ms-3">
                                            <li>
                                                <i class="bi bi-person-fill-check mx-1"></i>Admin
                                                <i class="bi bi-calendar mx-1"></i>01.21.24
                                            </li>
                                            <li>
                                                <i class="bi bi-chat-dots-fill mx-1"></i>Comments
                                            </li>
                                        </ul>
                                        </p>
                                        <h4 class="card-title"><a href="our-blog.php" class="mcf-blog">Card title</a></h4></a>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <img src="images/mcf-flower-3.png" class="img-fluid" alt="MCF's Chenille Stems flower three.">
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </section>

        <nav aria-label="blog navigation">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1</a>
                </li>
                <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>-->
                <li class="page-item disabled">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>

        </nav>

    </main>

    <?php include_once 'footer.inc' ?>

    <script src="../js/script.js"></script>


</body>

</html>