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
            <a class="nav-link px-2" href="reviews.php">Reviews</a>
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
        <p class="py-2"> Our Mogol Artist hand crafts every beautiful flower that no two are alike.</p>
      </div>

      <div class="col-md-6 banner text-center">
        <img src="../images/mcf-wreath.png" class="img-fluid mx-auto" alt="Gorgeous floral wreath shaped like a heart." />
      </div>
    </div>
  </div>


  <section>
    <div class="container-fluid" style="background-color: var(--color-1);">
      <div class="row py-2 border text-white">
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

  <section class="p-3 p-lg-5 pt-5">
    <div class="container-fluid">
      <div class="row align-items-center">
        <div class="col-lg-6 my-2 my-lg-5">
          <img src="images/mcf-vh.png" class="img-fluid rounded float-end" alt="MCF's Chenille Stems Artist.">
        </div>
        <div class="col-lg-6 my-2 my-lg-5">
          <div class="card-body">
            <h2 class="card-title header-font mb-4">About Millie's Crazy Flowers</h2>
            <p class="card-text">All our flowers are uniquely created just like our friend Millie, and they express a gentle reminder to those we love.</p>
            <p class="card-text"><small class="text-body-secondary fw-bold">Millie's legacy of friendship is LOVE.</small></p>
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
    </div>
  </section>

  <section class="counter-show px-3 px-lg-5 pt-3 pt-lg-5" style="background-color: var(--color-7);">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-lg-12 my-2 my-lg-3 pt-5">
          <div class="card-body">
            <p class="card-text  mb-1 tt-upper">Reviews About Our Flowers</p>
            <h2 class="card-title header-font">Technical Statistics</h2>
          </div>
        </div>
      </div>

      <div class="row text-center ">
        <div class="col-md-6 col-lg-3 my-2 my-lg-5">
          <div class="card-body">
            <h2 class="card-title tech-stat-numb mb-4">
              <div class="timer count-number">1</div>
            </h2>
            <p class="card-text"><small class="text-body-secondary fw-bold tt-upper">Year of Experience</small></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 my-2 my-lg-5">
          <div class="card-body">
            <h2 class="card-title tech-stat-numb mb-4">
              <div class="timer count-number">5</div>
            </h2>
            <p class="card-text"><small class="text-body-secondary fw-bold tt-upper">Satisfied Customers</small></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 my-2 my-lg-5">
          <div class="card-body">
            <h2 class="card-title tech-stat-numb mb-4">
              <div class="timer count-number">127</div>
            </h2>
            <p class="card-text"><small class="text-body-secondary fw-bold tt-upper">Flowers Completed</small></p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 my-2 my-lg-5">
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


  <section class="px-3 px-lg-5 pt-3 pt-lg-5">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-lg-12 my-2 my-lg-3 pt-5">
          <div class="card-body">
            <p class="card-text  mb-1 tt-upper">Testimonial</p>
            <h2 class="card-title header-font mb-3">Return Customers</h2>
          </div>
        </div>
      </div>

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="d-flex justify-content-center">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title 1</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title 2</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title 3</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title 4</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title 5</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title 6</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="d-flex justify-content-center">
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title 7</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title 8</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title 9</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>


        <!--
        <a class="carousel-control-prev" href="#carouselExampleAutoplaying" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleAutoplaying" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        -->


      </div>
    </div>
  </section>


  <section class="px-3 px-lg-5 pt-3 pt-lg-5">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-lg-12 my-2 my-lg-3 pt-5">
          <div class="card-body">
            <p class="card-text  mb-1 tt-upper">Production Flows</p>
            <h2 class="card-title header-font mb-3">How it Works</h2>
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
    </div>
  </section>


  <section class="px-3 px-lg-5 pt-3 pt-lg-5" style="background-color: var(--color-1);">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-lg-12 my-2 my-lg-3 pt-5">
          <div class="card-body">
            <p class="card-text  mb-1 tt-upper">Our Blog</p>
            <h2 class="card-title header-font mb-3">Recent From Blog</h2>
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