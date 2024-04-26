<?php
ob_start();
session_start();  //start or resume an existing session
include_once 'header.inc'
?>

<body id="toTop">
    <a href="#main-content" class="btn btn-primary btn-skip" aria-label="Go To Main Content">Go To Main Content</a>

    <nav class="navbar navbar-expand-lg mcf-navbar-light" aria-label="main menu">
        <div class="container-xl">
            <a class="navbar-brand bg-light-subtle p-1 border border-primary" href="index.php">
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
                        <a class="nav-link px-2" href="newsletter-april-2024.php">Newsletter</a>
                    </li>
                    <li class="nav-item" style="border-right: none;">
                        <a class="nav-link active px-2" href="contact.php" aria-current="page">Contact Us<span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <header id="main-content">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-end mb-5 bg-frame bg-img-contactUs" title="We are here to answer your questions and welcome your feedback.">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Contact Us&gt;</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Contact Us">
                        <section aria-label="Page Intro">
                            <h1 class="header-font pb-4 px-3 px-md-0">Contact Us
                            </h1>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>
        <!-- Section One -->

        <!-- Section Two -->
        <article aria-label="Contact Us">
            <div class="container">
                <div class="row justify-content-center">
                    
                    <?php

                    /**
                     * https://www.codexworld.com/new-google-recaptcha-with-php/
                     */

                    // Google reCAPTCHA API keys settings 
                    $secretKey  = getenv('g-secret-key');

                    // Email settings 
                    $recipientEmail = getenv('mcf-info-email');

                    // If the form is submitted 
                    $postData = $statusMsg = '';
                    $status = 'error';

                    if (isset($_POST['submit'])) {
                        $postData = $_POST;

                        // Validate form input fields
                        if (
                            !empty($_POST['contact-fn']) &&
                            !empty($_POST['contact-ln']) &&
                            !empty($_POST['contact-em']) &&
                            !empty($_POST['contact-subj']) &&
                            !empty($_POST['contact-ta']) &&
                            empty($_POST['beeName'])
                        ) {

                            // Validate reCAPTCHA checkbox 
                            if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                                // Verify the reCAPTCHA API response 
                                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secretKey . '&response=' . $_POST['g-recaptcha-response']);

                                // Decode JSON data of API response 
                                $responseData = json_decode($verifyResponse);

                                // If the reCAPTCHA API response is valid 
                                if ($responseData->success) {
                                    // Retrieve value from the form input fields 
                                    $firstName = !empty($_POST['contact-fn']) ? htmlspecialchars($_POST['contact-fn']) : '';
                                    $lastName = !empty($_POST['contact-ln']) ? htmlspecialchars($_POST['contact-ln']) : '';
                                    $email = !empty($_POST['contact-em']) ? htmlspecialchars($_POST['contact-em']) : '';
                                    $phone = !empty($_POST['contact-phone']) ? htmlspecialchars($_POST['contact-phone']) : '';
                                    $contactSubj = !empty($_POST['contact-subj']) ? htmlspecialchars($_POST['contact-subj']) : '';
                                    $contactMess = !empty($_POST['contact-ta']) ? htmlspecialchars($_POST['contact-ta']) : '';

                                    // Send email notification to the site admin 
                                    $to = $recipientEmail;
                                    $subject = 'MCF Contact Us Submitted';
                                    $htmlContent = " 
                    <h4>MCF's Contact Us Form - EN</h4> 
                    <p><b>Name: </b>" . $firstName . " " . $lastName . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Phone: </b>" . $phone . "</p> 
                    <p><b>Subject: </b>" . $contactSubj . "</p> 
                    <p><b>Message: </b>" . $contactMess . "</p> 
                ";

                                    // Always set content-type when sending HTML email 
                                    $headers = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                    // More headers 
                                    $headers .= 'From:' . $firstName . ' ' . $lastName . '<' . $email . '>' . "\r\n";

                                    // Send email 
                                    mail($to, $subject, $htmlContent, $headers);

                                    $status = 'success';
                                    $statusMsg = 'Thank you! Please allow up to 48 hours for a response.';
                                    $postData = '';
                                } else {
                                    $statusMsg = 'We apologize, reCaptcha verification failed, and  please try again.';
                                }
                            } else {
                                $statusMsg = 'Please check the reCAPTCHA checkbox to prove your human.';
                            }
                        } else {
                            $statusMsg = 'There wa one or more mandatory fields missing.';
                            if (!empty($_POST['beeName'])) {
                                $statusMsg = 'Are you Agent Smith?';
                            }
                        }
                    }

                    ?>

                    <div id="contact-us"></div>
                    <?php if (!empty($statusMsg)) { ?>
                        <div class="col-xl-8 col-lg-8 col-md-12 mb-5">
                            <div class="p-3 text-center text-bg-light hero-text-border" title="We are listening.">
                                <p class="mb-5 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="col-xl-10 col-lg-10 col-md-12 mb-5">
                        <div class="p-3 text-bg-light hero-text-border" title="Millie's Crazy Flowers Contact Us Form.">

                            <form action="contact.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>

                                <p class="fw-bold">We're open for any suggestion or just to have a chat.</p>

                                <div class="col-md-6">
                                    <label for="beeName" aria-hidden="true" class="visually-hidden">Sunflower Name</label>
                                    <input type="text" name="beeName" id="beeName" style="display:none">

                                    <label for="contact-fn" class="form-label">First Name (Required)</label>
                                    <input type="text" class="form-control" name="contact-fn" id="contact-fn" required>
                                    <div class="invalid-feedback">
                                        Please enter your first name.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="contact-ln" class="form-label">Last Name (Required)</label>
                                    <input type="text" class="form-control" name="contact-ln" id="contact-ln" required>
                                    <div class="invalid-feedback">
                                        Please enter your last name.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="contact-em" class="form-label">Email (Required)</label>
                                    <input type="email" class="form-control" name="contact-em" id="contact-em" required>
                                    <div class="invalid-feedback">
                                        Please enter your email.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="contact-phone" class="form-label">Phone (xxx.xxx.xxxx)</label>
                                    <input type="tel" class="form-control" name="contact-phone" id="contact-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                                    <div class="invalid-feedback">
                                        Optional, please enter a valid phone number.
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="contact-subj" class="form-label">Subject (Required)</label>
                                    <input type="text" class="form-control" name="contact-subj" id="contact-subj" required>
                                    <div class="invalid-feedback">
                                        Please enter a subject.
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="contact-ta" class="form-label">Question, Feedback or Improvement (Required)</label>
                                    <textarea class="form-control" name="contact-ta" id="contact-ta" required></textarea>
                                    <div class="invalid-feedback">
                                        Please type your message.
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey=<?php echo getenv('g-site-key'); ?>></div>
                                    <div>
                                        Note: The form will reset if unchecked.
                                    </div>
                                </div>

                                <div class="col-md-6 text-center">
                                    <button type="submit" class="btn mcf-button" name="submit">Submit Message</button>
                                </div>

                                <div class="col-md-6 text-center">
                                    <button type="reset" class="btn mcf-button" name="reset" value="reset" onclick="return resetFields();" aria-labelledby="reset">Reset Form</button>
                                    <div class="sr-only" id="reset" role="alert" aria-live="assertive" aria-atomic="true">
                                        <p>(A pop up will confirm your reset)</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-8 col-md-12 mb-5">
                        <div class="p-3 text-center hero-text-border banner" title="Please contact us with any questions, suggestions, or concerns.">
                            <section aria-label="Talk to Us">
                                <h2 class="h5 mb-6 px-3 px-md-0">Please allow us up to 48 hours to respond, and if you need assistance sooner, please email <?php echo getenv('mcf-to-email'); ?>
                                </h2>
                            </section>
                        </div>
                    </div>

                </div>
            </div>
        </article>

        <div id="map"></div>
        <article aria-label="Business Based City Map">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10 col-md-12 mb-5">
                        <div class="p-3 text-center text-bg-light hero-text-border">
                            <section aria-label="Base of Operations">
                                <h3 class="card-title header-font mb-3">We operate out of Valley Springs, California.</h3>
                            </section>
                            <div class="col-md-12 db-5">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25088.668857840803!2d-120.83613645418204!3d38.184731983234784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80908114b17cbaf5%3A0x2a7cf4cabd8c124d!2sValley%20Springs%2C%20CA%2095252!5e0!3m2!1sen!2sus!4v1706303237454!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Valley Springs, California" aria-hidden="true"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <?php include_once 'our_gallery.inc'; ?>

        <?php include_once 'footer.inc' ?>

        <script src="../js/script.js"></script>

        <script>
            // Example starter JavaScript for disabling form submissions if there are invalid fields
            (() => {
                'use strict'

                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                const forms = document.querySelectorAll('.needs-validation')

                // Loop over them and prevent submission
                Array.from(forms).forEach(form => {
                    form.addEventListener('submit', event => {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
            })()
        </script>
        <script>
            function resetFields() {
                return confirm("Are you sure you want to reset all fields?");
            }
        </script>

</body>

</html>