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
                        <a class="nav-link px-2" href="newsletter-feb-2024.php">Newsletter</a>
                    </li>
                    <li class="nav-item" style="border-right: none;">
                        <a class="nav-link active px-2" href="contact.php">Contact Us<span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <!-- Hero Section -->
        <section class="container-fluid">
            <div class="row justify-content-center align-items-end mb-5 bg-frame bg-img-contactUs" title="We are here to answer your questions and welcome your feedback.">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">HOME&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">CONTACT US&gt;</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Contact Us">
                        <h1 class="header-font pb-4 px-3 px-md-0">Contact Us
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section One -->
        <div id="map"></div>
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border">
                        <p class="card-title mb-3 h4">We operate out of Valley Springs, California.</p>
                        <div class="col-md-12 db-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25088.668857840803!2d-120.83613645418204!3d38.184731983234784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80908114b17cbaf5%3A0x2a7cf4cabd8c124d!2sValley%20Springs%2C%20CA%2095252!5e0!3m2!1sen!2sus!4v1706303237454!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section Two -->
        <section class="container">
            <div class="row justify-content-center mb-5 pb-3 pb-lg-5">
                <div class="col-xl-8 col-lg-8 col-md-12 py-5">
                    <div class="p-3 text-center hero-text-border banner" title="Please contact us with any questions, suggestions, or concerns.">
                        <p class=" h5 mb-6 px-3 px-md-0">Please allow us up to 48 hours to respond, and if you need assistance sooner, please email <?php echo getenv('mcf-to-email'); ?></p>
                    </div>
                </div>

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
                        !empty($_POST['contact-ta'])
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
                    <h4>MCF's Contact Us Form</h4> 
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
                    }
                }

                ?>

                <div id="contact-us"></div>
                <?php if (!empty($statusMsg)) { ?>
                    <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                        <div class="p-3 text-center text-bg-light hero-text-border" title="We are listening.">
                            <p class="mb-5 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3 text-bg-light hero-text-border" title="Millie's Crazy Flowers Contact Us Form.">

                        <form action="contact.php" method="POST" class="row g-3 needs-validation" id="myForm" novalidate>
                            <p class="fw-bold">We're open for any suggestion or just to have a chat.</p>

                            <div class="col-md-6">
                                <label for="contact-fn" class="form-label">First Name</label>
                                <input type="text" class="form-control" name="contact-fn" id="contact-fn" required>
                                <div class="invalid-feedback">
                                    Your first name is required.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact-ln" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="contact-ln" id="contact-ln" required>
                                <div class="invalid-feedback">
                                    Your last name is required.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact-em" class="form-label">Email</label>
                                <input type="email" class="form-control" name="contact-em" id="contact-em" required>
                                <div class="invalid-feedback">
                                    Your email is required.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="contact-phone" class="form-label">Phone(Optional)</label>
                                <input type="tel" class="form-control" name="contact-phone" id="contact-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="555.867.5309">
                                <div class="invalid-feedback">
                                    Please enter a valid phone number( optional).
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="contact-subj" class="form-label">Subject</label>
                                <input type="text" class="form-control" name="contact-subj" id="contact-subj" required>
                                <div class="invalid-feedback">
                                    A subject title is required.
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="contact-ta" class="form-label">Question, Feedback or Improvement</label>
                                <textarea class="form-control" name="contact-ta" id="contact-ta" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter your message.
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
                                <button type="reset" class="btn mcf-button" name="reset" value="reset" onclick="return resetFields();">Reset Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section Three -->
        <section class="px-1 py-4" style="background-color: var(--color-1);">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-lg-12 my-2 my-lg-3 pt-3">
                        <div class="card-body">
                            <p class="card-text  mb-1 tt-upper">Gallery</p>
                            <h2 class="card-title header-font mb-3">Latest Collection</h2>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <div class="col-lg-2 p-5 info-4 border border-white">
                        <img src="images/mcf-flower-1.png" class="img-fluid l-box" alt="MCF's Chenille Stems flower one." title="Zooming in!">
                    </div>

                    <div class="col-lg-2 p-5 info-4 border border-white">
                        <img src="images/mcf-flower-2.png" class="img-fluid l-box" alt="MCF's Chenille Stems flower two." title="Zooming in!">
                    </div>

                    <div class="col-lg-2 p-5 info-4 border border-white">
                        <img src="images/mcf-flower-3.png" class="img-fluid l-box" alt="MCF's Chenille Stems flower three." title="Zooming in!">
                    </div>
                    <div class="col-lg-2 p-5 info-4 border border-white">
                        <img src="images/mcf-flower-1.png" class="img-fluid l-box" alt="MCF's Chenille Stems flower one." title="Zooming in!">
                    </div>

                    <div class="col-lg-2 p-5 info-4 border border-white">
                        <img src="images/mcf-flower-2.png" class="img-fluid l-box" alt="MCF's Chenille Stems flower two." title="Zooming in!">
                    </div>

                    <div class="col-lg-2 p-5 info-4 border border-white">
                        <img src="images/mcf-flower-3.png" class="img-fluid l-box" alt="MCF's Chenille Stems flower three." title="Zooming in!">
                    </div>
                </div>

            </div>
        </section>

    </main>

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