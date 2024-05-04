<?php
ob_start();
session_start();  //start or resume an existing session
include_once 'header.inc'
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
            <a class="nav-link active px-2" href="index.php" aria-current="page">Home<span class="visually-hidden">(current)</span></a>
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

  <header id="main-content">
    <div class="d-flex h-rem">
      <div id="bg-left"></div>
      <div id="bg-right"></div>
    </div>

    <div class="container hero-content">
      <div class="row">
        <div class="col-md-6">
          <section aria-label="Website Intro">
            <h1 class="bswash-font h1-ls text-black">Millie's Crazy Flowers</h1>
            <p class="h4 f-italics pe-5">Legacy of love, caring, and lasting friendship towards one another.</p>
            <span class="sr-only">(The above without italics: Legacy of love, caring, and lasting friendship towards one another.)</span>

            <p class="pt-2 pb-3"> Our artist hand crafts every beautiful flower that no two are alike.</p>
          </section>
          <div class="pb-5">
            <a href="#discover" class="btn mcf-button p-3 fs-5">Discover</a>
          </div>
        </div>
        <div class="col-md-6 text-center">
          <img src="../images/mcf-wreath.png" class="img-fluid mx-auto" alt="Gorgeous floral wreath shaped like a heart.">
        </div>
      </div>
    </div>
  </header>

  <main>

    <article aria-label="four goals">
      <div class="container-fluid" style="background-color: var(--color-1);">
        <div class="row border text-white">
          <div class="col-lg-3 p-5 info-1 border border-white">
            <p class="bswash-font h4">Creative Elements</p>
            <p>In a whimsical creation, the vibrant colors of the pipe cleaners intertwine with dynamic lines, creating a harmonious composition that explores the elements of art.</p>
          </div>
          <div class="col-lg-3 p-5 info-2 border border-white">
            <p class="bswash-font h4">Community</p>
            <p>Exemplifies a holistic approach to supporting and uplifting various charitable endeavors, demonstrating a strong commitment to making a positive impact on the community or society at large.</p>
          </div>
          <div class="col-lg-3 p-5 info-3 border border-white fc-2">
            <p class="bswash-font h4">Expression</p>
            <p>
              In a unique fusion of sculptural art and contemporary expressionism, the vibrant hues of pipe cleaners blend seamlessly.</p>
          </div>
          <div class="col-lg-3 p-5 info-4 border border-white fc-2">
            <p class="bswash-font h4">We Care</p>
            <p>We create a welcoming atmosphere for a satisfying experience.</p>
          </div>
        </div>
      </div>
    </article>

    <article class="px-3 py-5 p-lg-5" aria-label="About MCF">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 my-2 my-lg-5">
            <img src="images/mcf-vh.png" class="img-fluid rounded float-end" alt="MCF's Pipe Cleaner Artist.">
          </div>
          <div class="col-lg-6 my-2 my-lg-5">
            <div class="card-body">
              <section aria-label="Short about us">
                <h2 class="card-title bswash-font mb-4">About Millie's Crazy Flowers</h2>
                <p class="card-text">All our flowers are uniquely created just like our friend Millie, and they express a gentle reminder of those we loved.</p>
                <p class="card-text"><small class="text-body-secondary fw-bold">Millie's legacy of friendship is <em>love.</em></small></p>
              </section>
              <div class="text-center pt-5">
                <a href="our_story.php" class="btn mcf-button p-3 fs-5">Our Story</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </article>

    <?php include_once 'our_gallery.inc'; ?>

    <?php include_once 'tech-stats.inc'; ?>

    <?php //include_once 'testimonials.inc'; 
    ?>


    <article class="px-3 px-lg-5" aria-label="Production overview">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-12 my-2 my-lg-3 pt-5">
            <div class="card-body">
              <p class="card-text  mb-1 tt-upper">Production Flows</p>
              <section aria-label="How it works">
                <h2 class="card-title bswash-font mb-3">How it Works</h2>
              </section>
            </div>
          </div>
        </div>

        <div class="row text-center">
          <div class="col-lg-4 p-3 p-lg-5">
            <div class="hiw-icon info-2">
              <div class="d-flex justify-content-center align-items-center">
                <small class="fc-1">1st</small>
              </div>
              <img src="../images/quote.png" class="img-fluid img-pos-2" alt="Pen and Paper icon">
            </div>
            <div class="card-body">
              <p class="card-title pt-3 h5">Inspiration</p>
              <p class="card-text">The Crazy Flowers were showcased at Millie H. celebration of life on 05-07-23, because it was a gentle reminder of the love, caring, and lasting friendship from Victoria. Victoria - 'The Vickster' and Millie - 'The Milster' always had fun when they were together by sharing pizza, watching movies, shopping, and just hanging out. Victoria's contribution was expressed by creating one of a kind, twisted colors of pipe cleaners, into beautiful petals, just like her friend.</p>
            </div>
          </div>

          <div class="col-lg-4 p-3 p-lg-5">
            <div class="hiw-icon info-4">
              <div class="d-flex justify-content-center align-items-center">
                <small class="fc-1">2nd</small>
              </div>
              <img src="../images/production.png" class="img-fluid img-pos-1" alt="Mechanical Gear icon">
            </div>
            <div class="card-body">
              <p class="card-title pt-3 h5">Production and Assembly</p>
              <p class="card-text">Millie's Crazy Flowers start with hundreds of solid colored pipe cleaners. Our artist selects the colors and gently twists the pipe cleaners together. Next, Victoria loops and locks the ends of the twisted pipe cleaners which create a petal. Each petal is slightly different. Once the petals are completed, they are separated by general colors and made into flowers. The finished flower is approximately seven inches across.</p>
            </div>
          </div>

          <div class="col-lg-4 p-3 p-lg-5">
            <div class="hiw-icon info-2">
              <div class="d-flex justify-content-center align-items-center">
                <small class="fc-1">3rd</small>
              </div>
              <img src="../images/delivery.png" class="img-fluid img-pos-1" alt="Delivery Box icon">
            </div>
            <div class="card-body">
              <p class="card-title pt-3 h5">Delivery</p>
              <p class="card-text">Our current postage and handling charge is $6 for each flower, but when you buy two, then the third one gets free delivery. For larger quantities, delivery costs are adjustable, and we will email a final amount for you. We only deliver in the continental United States at this time through the <span class="text-uppercase">usps</span><span class="sr-only">(United States Postage Service)</span>. If you need your flowers sooner, we are able to make arrangements with <span class="text-uppercase">ups</span><span class="sr-only">(United Parcel Service)</span> or FedEx <span class="sr-only">(Federal Express)</span>.
              </p>
            </div>
          </div>

          <div class="row mx-auto">
            <div class="col-sm-6 pb-3 pb-sm-5">
              <a href="our_story.php" class="btn mcf-button p-3 fs-5">Our Story</a>
            </div>
            <div class="col-sm-6 pb-5">
              <a href="contact.php" class="btn mcf-button p-3 fs-5">Contact Us</a>
            </div>
          </div>

        </div>
      </div>
    </article>

    <?php include_once 'recent_newsletter.inc' ?>

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