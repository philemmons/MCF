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
            <a class="nav-link active px-2" aria-current="page" href="index.php">Home<span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="about-us.php">Our Story</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="purchase.php">Flowers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-2" href="our-blog.php">Blog</a>
          </li>
          <li class="nav-item" style="border-right: none;">
            <a class="nav-link px-2" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <section class="d-flex h-rem">
    <div id="bg-left"></div>
    <div id="bg-right"></div>
  </section>

  <div class="container hero-content">
    <div class="row">
      <div class="col-md-6 banner">
        <h1 class="header-font">Millie's Crazy Flowers</h1>
        <h4 class="font-italic">Legacy of love, caring, and lasting friendship towards one another.</h4>
        <p class="pt-2 pb-3"> Our Mogol Artist hand crafts every beautiful flower that no two are alike.</p>
        <div class="pb-5">
          <a href="#discover" class="btn mcf-button p-3 fs-5">Discover</a>
        </div>
      </div>
      <div class="col-md-6 banner text-center">
        <img src="../images/mcf-wreath.png" class="img-fluid mx-auto" alt="Gorgeous floral wreath shaped like a heart." />
      </div>
    </div>
  </div>


  <section id="discover">
    <div class="container-fluid" style="background-color: var(--color-1);">
      <div class="row border text-white">
        <div class="col-lg-3 p-5 info-1 border border-white">
          <h4 class="header-font">Creative Elements</h4>
          <p>In a whimsical creation, the vibrant colors of the pipe cleaners intertwine with dynamic lines, creating a harmonious composition that explores the elements of art.</p>
        </div>
        <div class="col-lg-3 p-5 info-2 border border-white">
          <h4 class="header-font">Community</h4>
          <p>Exemplifies a holistic approach to supporting and uplifting various charitable endeavors, demonstrating a strong commitment to making a positive impact on the community or society at large.</p>
        </div>
        <div class="col-lg-3 p-5 info-3 border border-white">
          <h4 class="header-font">Expression</h4>
          <p>
            In a unique fusion of traditional Mongol art and contemporary expressionism, the vibrant hues of pipe cleaners blend seamlessly.</p>
        </div>
        <div class="col-lg-3 p-5 info-4 border border-white">
          <h4 class="header-font">We Care</h4>
          <p>We create a welcoming atmosphere for a satisfying experience.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="px-3 py-5 p-lg-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 my-2 my-lg-5">
          <img src="images/mcf-vh.png" class="img-fluid rounded float-end" alt="MCF's Chenille Stems Artist.">
        </div>
        <div class="col-lg-6 my-2 my-lg-5">
          <div class="card-body">
            <h2 class="card-title header-font mb-4">About Millie's Crazy Flowers</h2>
            <p class="card-text">All our flowers are uniquely created just like our friend Millie, and they express a gentle reminder to those we love.</p>
            <p class="card-text"><small class="text-body-secondary fw-bold">Millie's legacy of friendship is LOVE.</small></p>

            <div class="text-center pb-5">
              <a href="about-us.php" class="btn mcf-button p-3 fs-5">More Info</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="px-3 px-lg-5 pt-3 pt-lg-5" style="background-color: var(--color-1);">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-lg-12 my-2 my-lg-3 pt-5">
          <div class="card-body">
            <p class="card-text  mb-1 tt-upper">Our Finished Projects</p>
            <h2 class="card-title header-font mb-3">Crazy Flower Collection</h2>
          </div>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-lg-4 p-5 info-4 border border-white">
          <img src="images/mcf-flower-1.png" class="img-fluid" alt="MCF's Chenille Stems flower one.">
        </div>

        <div class="col-lg-4 p-5 info-4 border border-white">
          <img src="images/mcf-flower-2.png" class="img-fluid" alt="MCF's Chenille Stems flower two.">
        </div>

        <div class="col-lg-4 p-5 info-4 border border-white">
          <img src="images/mcf-flower-3.png" class="img-fluid" alt="MCF's Chenille Stems flower three.">
        </div>
      </div>

      <div class=" text-center pt-4 pb-5">
        <a href="purchase.php" class="btn mcf-button p-3 fs-5">Order Now</a>
      </div>

    </div>
  </section>

  <section class="counter-show px-3 px-lg-5 pt-3 pt-lg-5" style="background-color: var(--color-7);">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12 my-2 my-lg-3 pt-5">
          <div class="card-body">
            <p class="card-text  mb-1 tt-upper">Reviews About Our Flowers</p>
            <h2 class="card-title header-font">Technical Statistics</h2>
          </div>
        </div>
      </div>

      <div class="row text-center ">
        <div class="col-md-6 col-lg-3 my-3 my-lg-5">
          <div class="card-body">
            <h2 class="card-title tech-stat-numb mb-4">
              <div class="timer count-number">1</div>
            </h2>
            <p class="card-text"><small class="text-body-secondary fw-bold tt-upper">Year of Experience</small></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 my-3 my-lg-5">
          <div class="card-body">
            <h2 class="card-title tech-stat-numb mb-4">
              <div class="timer count-number">5</div>
            </h2>
            <p class="card-text"><small class="text-body-secondary fw-bold tt-upper">Satisfied Customers</small></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 my-3 my-lg-5">
          <div class="card-body">
            <h2 class="card-title tech-stat-numb mb-4">
              <div class="timer count-number">127</div>
            </h2>
            <p class="card-text"><small class="text-body-secondary fw-bold tt-upper">Flowers Completed</small></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 mt-3 my-lg-5 mb-5">
          <div class="card-body">
            <h2 class="card-title tech-stat-numb mb-4">
              <div class="timer count-number">3</div>
            </h2>
            <p class="card-text"><small class="text-body-secondary fw-bold tt-upper">Get Awards</small></p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="px-0 px-lg-5 pt-3 pt-lg-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12 my-2 my-lg-3 pt-5">
          <div class="card-body">
            <p class="card-text  mb-1 tt-upper">Testimonial</p>
            <h2 class="card-title header-font mb-3">Return Customers</h2>
          </div>
        </div>
      </div>


      <div id="carouselExampleAuto" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner pt-2">
          <div class="carousel-item p-3 active">
            <div class="d-flex justify-content-center">

              <div class="card c-shadow mx-3">
                <div class="card-header">
                  <h6 class="card-title text-center pt-2"><strong>Rated 4.5 out of 5 stars</strong></h6>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="card-text">A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Reviewed by <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <div class="text-end">
                    <a href="#" class="btn btn-light border-cust py-3" role="button" data-bs-toggle="button">View</a>
                  </div>
                </div>
                <div class="card-footer text-body-secondary">
                  Commented on 01.24.24
                </div>
              </div>

              <div class="card c-shadow d-none d-md-block mx-3">
                <div class="card-header">
                  <h6 class="card-title text-center pt-2"><strong>Rated 4.5 out of 5 stars</strong></h6>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="card-text">A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Reviewed by <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <div class="text-end">
                    <a href="#" class="btn btn-light border-cust py-3" role="button" data-bs-toggle="button">View</a>
                  </div>
                </div>
                <div class="card-footer text-body-secondary">
                  Commented on 01.24.24
                </div>
              </div>

              <div class="card c-shadow d-none d-lg-block mx-3">
                <div class="card-header">
                  <h6 class="card-title text-center pt-2"><strong>Rated 4.5 out of 5 stars</strong></h6>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="card-text">A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Reviewed by <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <div class="text-end">
                    <a href="#" class="btn btn-light border-cust py-3" role="button" data-bs-toggle="button">View</a>
                  </div>
                </div>
                <div class="card-footer text-body-secondary">
                  Commented on 01.24.24
                </div>
              </div>
            </div>
          </div>


          <div class="carousel-item p-3">
            <div class="d-flex justify-content-center">
              <div class="card c-shadow mx-3">
                <div class="card-header">
                  <h6 class="card-title text-center pt-2"><strong>Rated 4.5 out of 5 stars</strong></h6>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="card-text">A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Reviewed by <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <div class="text-end">
                    <a href="#" class="btn btn-light border-cust py-3" role="button" data-bs-toggle="button">View</a>
                  </div>
                </div>
                <div class="card-footer text-body-secondary">
                  Commented on 01.24.24
                </div>
              </div>

              <div class="card c-shadow d-none d-md-block mx-3">
                <div class="card-header">
                  <h6 class="card-title text-center pt-2"><strong>Rated 4.5 out of 5 stars</strong></h6>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="card-text">A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Reviewed by <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <div class="text-end">
                    <a href="#" class="btn btn-light border-cust py-3" role="button" data-bs-toggle="button">View</a>
                  </div>
                </div>
                <div class="card-footer text-body-secondary">
                  Commented on 01.24.24
                </div>
              </div>

              <div class="card c-shadow d-none d-lg-block mx-3">
                <div class="card-header">
                  <h6 class="card-title text-center pt-2"><strong>Rated 4.5 out of 5 stars</strong></h6>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="card-text">A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Reviewed by <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <div class="text-end">
                    <a href="#" class="btn btn-light border-cust py-3" role="button" data-bs-toggle="button">View</a>
                  </div>
                </div>
                <div class="card-footer text-body-secondary">
                  Commented on 01.24.24
                </div>
              </div>
            </div>
          </div>


          <div class="carousel-item p-3">
            <div class="d-flex justify-content-center">
              <div class="card c-shadow mx-3">
                <div class="card-header">
                  <h6 class="card-title text-center pt-2"><strong>Rated 4.5 out of 5 stars</strong></h6>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="card-text">A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Reviewed by <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <div class="text-end">
                    <a href="#" class="btn btn-light border-cust py-3" role="button" data-bs-toggle="button">View</a>
                  </div>
                </div>
                <div class="card-footer text-body-secondary">
                  Commented on 01.24.24
                </div>
              </div>

              <div class="card c-shadow d-none d-md-block mx-3">
                <div class="card-header">
                  <h6 class="card-title text-center pt-2"><strong>Rated 4.5 out of 5 stars</strong></h6>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="card-text">A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Reviewed by <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <div class="text-end">
                    <a href="#" class="btn btn-light border-cust py-3" role="button" data-bs-toggle="button">View</a>
                  </div>
                </div>
                <div class="card-footer text-body-secondary">
                  Commented on 01.24.24
                </div>
              </div>

              <div class="card c-shadow d-none d-lg-block mx-3">
                <div class="card-header">
                  <h6 class="card-title text-center pt-2"><strong>Rated 4.5 out of 5 stars</strong></h6>
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p class="card-text">A well-known quote, contained in a blockquote element.</p>
                    <footer class="blockquote-footer">Reviewed by <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <div class="text-end">
                    <a href="#" class="btn btn-light border-cust py-3" role="button" data-bs-toggle="button">View</a>
                  </div>
                </div>
                <div class="card-footer text-body-secondary">
                  Commented on 01.24.24
                </div>
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAuto" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAuto" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>
      </div>
    </div>
  </section>


  <section class="px-3 px-lg-5 pt-3 pt-lg-5">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12 my-2 my-lg-3 pt-5">
          <div class="card-body">
            <p class="card-text  mb-1 tt-upper">Production Flows</p>
            <h2 class="card-title header-font mb-3">How it Works</h2>
          </div>
        </div>
      </div>

      <div class="row text-center">
        <div class="col-lg-4 p-3 p-lg-5">
          <div class="hiw-icon info-4">
            <div class="d-flex justify-content-center align-items-center">
              <small class="fc-1">1st</small>
            </div>
            <img src="../images/quote.png" class="img-fluid img-pos-2" alt="Delivery truck icon">
          </div>
          <div class="card-body">
            <h5 class="card-titlept-3">Quotes or Questions</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <div class="col-lg-4 p-3 p-lg-5">
          <div class="hiw-icon info-1">
            <div class="d-flex justify-content-center align-items-center">
              <small class="fc-1">2nd</small>
            </div>
            <img src="../images/production.png" class="img-fluid img-pos-1" alt="Delivery truck icon">
          </div>
          <div class="card-body">
            <h5 class="card-title pt-3">Production and Assembly</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <div class="col-lg-4 p-3 p-lg-5">
          <div class="hiw-icon info-4">
            <div class="d-flex justify-content-center align-items-center">
              <small class="fc-1">3rd</small>
            </div>
            <img src="../images/delivery.png" class="img-fluid img-pos-1" alt="Delivery truck icon">
          </div>
          <div class="card-body">
            <h5 class="card-title pt-3">Delivery</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <div class="d-grid justify-content-evenly">
          <div class="px-3 pb-5">
            <a href="about-us.php" class="btn mcf-button p-3 fs-5">Learn More</a>
          </div>
          <div class="px-3">
            <a href="contact.php" class="btn mcf-button p-3 fs-5">Question</a>
          </div>
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


      <div class="row row-cols-1 row-cols-lg-2 g-4 p-3 p-lg-5">
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
                  <h5 class="card-title"><a href="our-blog.php">Card title<a></h5>
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
                  <h5 class="card-title"><a href="our-blog.php">Card title<a></h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
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
                  <h5 class="card-title"><a href="our-blog.php">Card title<a></h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <div class="col-sm-6 text-center">
                <img src="images/mcf-flower-3.png" class="img-fluid" alt="MCF's Chenille Stems flower three.">
              </div>
            </div>
          </div>
        </div>

        <div class="col">
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
                  <h5 class="card-title"><a href="our-blog.php">Card title<a></h5>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
              <div class="col-sm-6 text-center">
                <img src="images/mcf-flower-3.png" class="img-fluid" alt="MCF's Chenille Stems flower three.">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>


  <?php include_once 'footer.inc' ?>

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