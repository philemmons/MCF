<?php
ob_start();
session_start();  //start or resume an existing session
include_once 'header-top.inc';
echo "<title>Millie's Crazy Flowers - Purchase</title>";
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
                        <a class="nav-link px-2" href="our_story.php">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 active" href="purchase.php" aria-current="page">Purchase<span class="visually-hidden">(current)</span></a>
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
            <div class="row justify-content-center align-items-end mb-5 bg-frame bg-img-purchase" title="MCF's Order Form">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Purchase</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Contact Us">
                        <section aria-label="Page Intro">
                            <h1 class="bswash-font pb-4 px-3 px-md-0">Purchase
                            </h1>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main>

        <article aria-label="Purchase">
            <div class="container shadow-wrap">
                <div class="row justify-content-center mb-5">
                    <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                        <div class="p-3  text-bg-light hero-text-border" title="Support, Happiness, and Memories.">
                            <section aria-label="Purchase-Intro">
                                <h2 class="card-title bswash-font mb-3">Millie's Crazy Flowers' Order Form </h2>
                                <p>We are grateful you have decided to purchase, one or more, Millie's Crazy Flowers. Thank you for supporting our communities most vulnerable, promoting happiness, and taking action! 50% of our proceeds will be donated between <a href="https://soor.org/give/" class="mcf-link  fw-bold" target="_blank" rel="noopener noreferrer">Special Olympics Oregon<span class="sr-only">(Opens a new window)</span></a> and <a href="https://www.crossingbridgestrc.org/" class="mcf-link  fw-bold" target="_blank" rel="noopener noreferrer">Crossing Bridges Therapeutic Riding Center<span class="sr-only">(Opens a new window)</span></a>.</p>
                                <p>Each flower is $12.50, or buy TWO and get ONE free. Postage and handling for three flowers is $12.00, or $6.00 each. We'll send you an email with your order and amount due. Please allow for up to 48 hours, once your payment has been received, for us to mail your flowers with USPS.</p>
                            </section>
                        </div>
                    </div>

                    <?php

                    include_once 'php/source.php';


                    /**
                     * https://www.codexworld.com/new-google-recaptcha-with-php/
                     * 
                     * https://www.namecheap.com/support/knowledgebase/article.aspx/10038/31/how-to-configure-a-contact-form-with-us/#mailfunction
                     *
                     */

                    // Google reCAPTCHA API keys settings 
                    $secretKey  = getenv('g-secret-key');

                    // Email settings
                    $recipientEmail = getenv('mcf-sales-email');
                    $bccEmail = getenv('mcf-bcc-email');
                    $bccEmail2 = getenv('mcf-bcc-email2');

                    // Change lang variable as needed based on lang reg form
                    $lang = 'en';

                    // If the form is submitted 
                    $postData = $statusMsg = '';
                    $status = 'error';

                    if (isset($_POST['submit'])) {
                        $postData = $_POST;

                        // Validate form required input fields
                        if (
                            !empty($_POST['firstName']) &&
                            !empty($_POST['lastName']) &&
                            !empty($_POST['myEmail']) &&
                            !empty($_POST['myAddress']) &&
                            !empty($_POST['myCity']) &&
                            !empty($_POST['myState']) &&
                            !empty($_POST['myZipcode']) &&
                            !empty($_POST['quanFlower']) &&
                            !empty($_POST['paymentCheckBox']) &&
                            !empty($_POST['paymentMethod']) &&
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
                                    $firstName = !empty($_POST['firstName']) ? htmlspecialchars($_POST['firstName'], ENT_QUOTES) : '';
                                    $lastName = !empty($_POST['lastName']) ? htmlspecialchars($_POST['lastName'], ENT_QUOTES) : '';
                                    $email = !empty($_POST['myEmail']) ? htmlspecialchars($_POST['myEmail'], ENT_QUOTES) : '';
                                    $phone = !empty($_POST['myPhone']) ? htmlspecialchars($_POST['myPhone'], ENT_QUOTES) : '';
                                    $address = !empty($_POST['myAddress']) ? htmlspecialchars($_POST['myAddress'], ENT_QUOTES) : '';
                                    $city = !empty($_POST['myCity']) ? htmlspecialchars($_POST['myCity'], ENT_QUOTES) : '';
                                    $state = !empty($_POST['myState']) ? htmlspecialchars($_POST['myState'], ENT_QUOTES) : '';
                                    $zc = !empty($_POST['myZipcode']) ? htmlspecialchars($_POST['myZipcode'], ENT_QUOTES) : '';
                                    $qf = !empty($_POST['quanFlower']) ? htmlspecialchars($_POST['quanFlower'], ENT_QUOTES) : '';
                                    $cBox = !empty($_POST['paymentCheckBox']) ? htmlspecialchars($_POST['paymentCheckBox'], ENT_QUOTES) : '';
                                    $pm = !empty($_POST['paymentMethod']) ? htmlspecialchars($_POST['paymentMethod'], ENT_QUOTES) : '';
                                    $bl = !empty($_POST['buyerLead']) ? htmlspecialchars($_POST['buyerLead'], ENT_QUOTES) : '';

                                    $subtotal = getAmount($qf, 12.5);
                                    $postage = getAmount($qf, 6.0);

                                    $total = $postage + $subtotal;

                                    // Send email notification to the site admin 
                                    $to = $email;
                                    $subject = 'MCF Order Form Submitted';
                                    $htmlContent = " 
                    <h4>Millie's Crazy Flower's Order Form - EN</h4>
                    <p><b>Name: </b>" . $firstName . " " . $lastName . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Phone: </b>" . $phone . "</p> 
                    <p><b>Address: </b>" . $address . "</p> 
                    <p><b>City: </b>" . $city . "</p> 
                    <p><b>State: </b>" . $state . "</p> 
                    <p><b>Zip Code: </b>" . $zc . "</p> 
                    <p><b>Quantity: </b>" . $qf . "</p> 
                    <p><b>Subtotal: </b>$" . number_format($subtotal, 2) . "</p> 
                    <p><b>Postage: </b>$" . number_format($postage, 2) . "</p>
                    <p><b>Amount Due: </b>$" . number_format($total, 2) . "</p> 
                    <p><b>I agreed with the ToS and understand my purchase is incomplete until paid: </b>" . $cBox . "</p> 
                    <p><b>Payment Method: </b>" . $pm . "</p>
                    <p><b>How did you hear about us: </b>" . $bl . "</p>
                    <p>Thank you and we appreciate you support!</p>
                ";

                                    // Always set content-type when sending HTML email 
                                    $headers = "MIME-Version: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                    // More headers 
                                    $headers .= 'From: MCF Sales<' . $recipientEmail . '>' . "\r\n";

                                    $headers .= 'Bcc: ' . $recipientEmail . "," . $bccEmail . "," . $bccEmail2 . "\r\n";

                                    // Send email 
                                    mail($to, $subject, $htmlContent, $headers);

                                    $status = 'success';
                                    $statusMsg = 'Your order was sent and thank you once again! A copy of your order form has been emailed to you.';
                                    $postData = '';

                                    orderFormData($total, $lang);
                                } else {
                                    $statusMsg = 'reCaptcha verification failed, please try again.';
                                }
                            } else {
                                $statusMsg = 'Please check the reCAPTCHA checkbox.';
                            }
                        } else {
                            $statusMsg = 'Please fill all the mandatory fields.';
                            if (!empty($_POST['beeName'])) {
                                $statusMsg = 'Are you Agent Smith?';
                            }
                        }
                    }

                    ?>


                    <?php if (!empty($statusMsg)) { ?>
                        <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                            <div class="p-3 text-center text-bg-light hero-text-border" title="Online order form message.">
                                <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="col-xl-10 col-lg-10 col-md-12 py-4">

                        <form action="purchase.php" method="POST" class="needs-validation" id="myForm" aria-label="Order Form" novalidate>

                            <fieldset class="text-bg-light pb-3 mb-3">
                                <legend>Personal Information</legend>
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <label for="beeName" aria-hidden="true" class="visually-hidden">Sunflower Name</label>
                                        <input type="text" name="beeName" id="beeName" style="display:none">

                                        <label for="firstName" class="reg-form-label">First Name (Required)</label>
                                        <input type="text" class="form-control" name="firstName" id="firstName" required>
                                        <div class="invalid-feedback">
                                            Please enter your first name.
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="lastName" class="reg-form-label">Last Name (Required)</label>
                                        <input type="text" class="form-control" name="lastName" id="lastName" required>
                                        <div class="invalid-feedback">
                                            Please enter your last name.
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="myEmail" class="reg-form-label">Email (Required)</label>
                                        <input type="email" class="form-control" name="myEmail" id="myEmail" required>
                                        <div class="invalid-feedback">
                                            Please enter your email.
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="myPhone" class="reg-form-label">Phone with Area Code (xxx.xxx.xxxx)</label>
                                        <input type="tel" class="form-control" name="myPhone" id="myPhone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$">
                                        <div class="invalid-feedback">
                                            Optional, please enter a valid phone number.
                                        </div>
                                    </div>

                                    <div class="col-md-8">
                                        <label for="myAddress" class="reg-form-label">Mailing Address (Required)</label>
                                        <input type="text" class="form-control" name="myAddress" id="myAddress" required>
                                        <div class="invalid-feedback">
                                            Please enter your mailing address.
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="myCity" class="reg-form-label">City (Required)</label>
                                        <input type="text" class="form-control" name="myCity" id="myCity" required>
                                        <div class="invalid-feedback">
                                            Please enter your city.
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="myState" class="reg-form-label">State (Required)</label>
                                        <select class="form-select" name="myState" id="myState" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="DC">District of Columbia</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select your state.
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="myZipcode" class="reg-form-label">Zip Code (Required)</label>
                                        <input type="text" class="form-control" name="myZipcode" id="myZipcode" required>
                                        <div class="invalid-feedback">
                                            Please enter your zip code.
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset class="text-bg-light pb-3 mb-3">
                                <legend>Order Information</legend>
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <label for="quanFlower" class="reg-form-label">Quantity (Required)</label>
                                        <select class="form-select" name="quanFlower" id="quanFlower" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please enter your quantity.
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <p>Note: Each flower is $12.50, or buy TWO and get ONE free. Postage and handling for three flowers is $12.00, or $6.00 each.</p>
                                        <p>If you would like order more than 10 flowers, please email us at <?php echo getenv('mcf-sales-email'); ?> directly, and we will get back to you as soon as we can.</p>
                                    </div>

                                    <div class="col-md-4">
                                        <label for="buyerLead" class="reg-form-label">How did you hear about us? (Optional)</label>
                                        <select class="form-select" name="buyerLead" id="buyerLead">
                                            <option selected disabled value="">Choose...</option>
                                            <option value="craft show">Craft Show</option>
                                            <option value="event">Event</option>
                                            <option value="facebook">Facebook</option>
                                            <option value="flyer">Flyer</option>
                                            <option value="google">Google</option>
                                            <option value="instagram">Instagram</option>
                                            <option value="pinterest">Pinterest</option>
                                            <option value="word of mouth">Word of Mouth</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please enter your answer.
                                        </div>
                                    </div>

                                </div>
                            </fieldset>

                            <fieldset class="text-bg-light pb-3 mb-3">
                                <legend>Terms of Services</legend>
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="paymentCheckBox" id="paymentCheckBox" value="1" required>
                                            <label class="form-check-label" for="paymentCheckBox">
                                                I agree to terms of service AND <strong>understand my order is incomplete until paid.</strong>(Required)
                                                <span class="sr-only">(Press the space bar to accept)</span>
                                            </label>
                                            <div class="invalid-feedback">
                                                Required - You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="paymentMethod" class="reg-form-label">Payment Method Options Below(Required)</label>
                                        <select class="form-select" name="paymentMethod" id="paymentMethod" required>
                                            <option selected disabled value="">Choose...</option>
                                            <option value="venmo">Venmo</option>
                                            <option value="paypal">PayPal</option>
                                            <option value="cash">Cash</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select one.
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="row justify-content-center">
                                <div class="col-md-12 mb-3">
                                    <div class="g-recaptcha" data-sitekey=<?php echo getenv('g-site-key'); ?>></div>
                                    <div id="reCaptcha-warning">
                                        <strong>Note</strong>: The form will reset if unchecked.
                                    </div>
                                </div>

                                <div class="col-md-6 text-center mb-3">
                                    <button type="submit" class="btn mcf-button" name="submit">Submit Form</button>
                                </div>

                                <div class="col-md-6 text-center mb-3">
                                    <button type="reset" class="btn mcf-button" name="reset" value="reset" onclick="return resetFields();" aria-labelledby="reset">Reset Form</button>
                                    <div class="sr-only" id="reset" role="alert" aria-live="assertive" aria-atomic="true">
                                        <p>(A pop up will confirm your reset form)</p>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </article>


        <!-- Part Payment -->
        <article aria-label="Payment method">
            <div class="container shadow-wrap">
                <div class="row justify-content-center py-4 mb-5">
                    <div id="payment-now"></div>
                    <div class="col-xl-8 col-lg-8 col-md-12 ">
                        <div class="p-3 text-center text-bg-light hero-text-border" title="Payment Methods">
                            <section aria-label="Preferred Method">
                                <h3 class="card-title bswash-font mb-3">Preferred Payment Methods
                                </h3>
                                <p><strong>Please add your order name or email in your payment.</strong>
                                </p>
                                <p class="mcf-link">Remember: Your payment completes your order!
                                </p>
                                <p>The QR codes below require the mobile apps. If you need some assistance with making a payment, please send an email to <a href="mailto:<?php echo getenv('mcf-to-email') ?>" class="mcf-link">Tech Support</a>.
                                </p>
                            </section>
                            <div class="row justify-content-center">
                                <div class="col-sm-6 py-5">
                                    <img src="../images/venmo-qrCode.png" class="img-fluid shadow-wrap" alt="Venmo QR code" title="Venmo qrCode">
                                    <p class="text-center pt-4"><?php echo getenv('mcf-venmo') ?></p>
                                </div>
                                <div class="col-sm-6 py-5">
                                    <img src="../images/paypal-qrCode.png" class="img-fluid shadow-wrap" alt="PayPal QR code" title="PayPal qrCode">
                                    <p class="text-center pt-4"><?php echo getenv('mcf-pp-email') ?></p>
                                </div>
                                <p>The links below provide general payment instructions.</p>
                                <p class="mb-3"><a href="https://help.venmo.com/hc/en-us/articles/210413477-Sending-Requesting-Money" class="mcf-link" target="_blank" rel="noopener noreferrer" title="Direct link to Venmo">How can I send a payment or request money with Venmo?<span class="sr-only">(Opens a new window)</span></a></p>
                                <p class="mb-3"><a href="https://www.paypal.com/in/cshelp/article/how-do-i-send-payments-help293" class="mcf-link" target="_blank" rel="noopener noreferrer" title="Direct link to PayPal">How do I send payments with PayPal?<span class="sr-only">(Opens a new window)</span></a></p>
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