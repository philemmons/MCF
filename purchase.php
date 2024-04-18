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
                        <a class="nav-link px-2" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="our_story.php">Our Story</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="purchase.php" aria-current="page">Purchase<span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="newsletter-feb-2024.php">Newsletter</a>
                    </li>
                    <li class="nav-item" style="border-right: none;">
                        <a class="nav-link active px-2" href="contact.php">Contact Us</a>
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
                            <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Purchase</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Contact Us">
                        <h1 class="header-font pb-4 px-3 px-md-0">Purchase
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section One -->
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

        <article aria-label="Registration">
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-10 col-lg-10 col-md-12 pt-4">
                    <div class="p-3  text-bg-light hero-text-border" title="Memories are in the making.">
                        <section aria-label="Registration-Intro">
                            <h3 class="card-title text-center mb-3">Registration 2024</h3>
                            <p>We are excited to announce that the Monterey Bay Area Roundup is coming in 2024, and we are glad you are planning to attend! The conference will take place at the Monterey Conference Center on Labor Day weekend: Aug 31 to Sept 1, 2024. After registering, you should get an email with your choices and the total due.</p>
                        </section>
                    </div>
                </div>

                <?php

                include_once 'source/php_source.php';


                /**
                 * https://www.codexworld.com/new-google-recaptcha-with-php/
                 * 
                 * https://www.namecheap.com/support/knowledgebase/article.aspx/10038/31/how-to-configure-a-contact-form-with-us/#mailfunction
                 *
                 */

                // Google reCAPTCHA API keys settings 
                $secretKey  = getenv('g-secret-key');

                // Email settings
                $recipientEmail = getenv('mbar-to-email');
                $bccEmail = getenv('mbar-bcc-email');

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
                        !empty($_POST['myFellowship']) &&
                        !empty($_POST['myRegistration']) &&
                        !empty($_POST['earlyBirdMealBundle']) &&
                        !empty($_POST['meetTheSpeakerDinner']) &&
                        !empty($_POST['roundupContinentalBreakfast']) &&
                        !empty($_POST['iceCreamSocial']) &&
                        /*
                        !empty($_POST['teeShirtQuantity']) &&
                        !empty($_POST['teeShirtSize']) &&
                        !empty($_POST['teeShirtGender']) &&
*/
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
                                $badgeName = !empty($_POST['badgeName']) ? htmlspecialchars($_POST['badgeName'], ENT_QUOTES) : '';
                                $email = !empty($_POST['myEmail']) ? htmlspecialchars($_POST['myEmail'], ENT_QUOTES) : '';
                                $phone = !empty($_POST['myPhone']) ? htmlspecialchars($_POST['myPhone'], ENT_QUOTES) : '';
                                $address = !empty($_POST['myAddress']) ? htmlspecialchars($_POST['myAddress'], ENT_QUOTES) : '';
                                $city = !empty($_POST['myCity']) ? htmlspecialchars($_POST['myCity'], ENT_QUOTES) : '';
                                $state = !empty($_POST['myState']) ? htmlspecialchars($_POST['myState'], ENT_QUOTES) : '';
                                $zc = !empty($_POST['myZipcode']) ? htmlspecialchars($_POST['myZipcode'], ENT_QUOTES) : '';
                                $fs = !empty($_POST['myFellowship']) ? htmlspecialchars($_POST['myFellowship'], ENT_QUOTES) : '';
                                $hg = !empty($_POST['myHomegroup']) ? htmlspecialchars($_POST['myHomegroup'], ENT_QUOTES) : '';
                                $register = !empty($_POST['myRegistration']) ? htmlspecialchars($_POST['myRegistration'], ENT_QUOTES) : '';
                                $ebmb = !empty($_POST['earlyBirdMealBundle']) ? htmlspecialchars($_POST['earlyBirdMealBundle'], ENT_QUOTES) : '';
                                $mtsd = !empty($_POST['meetTheSpeakerDinner']) ? htmlspecialchars($_POST['meetTheSpeakerDinner'], ENT_QUOTES) : '';
                                $rucb = !empty($_POST['roundupContinentalBreakfast']) ? htmlspecialchars($_POST['roundupContinentalBreakfast'], ENT_QUOTES) : '';
                                $ics = !empty($_POST['iceCreamSocial']) ? htmlspecialchars($_POST['iceCreamSocial'], ENT_QUOTES) : '';
                                $snd = !empty($_POST['saturdayNightDance']) ? htmlspecialchars($_POST['saturdayNightDance'], ENT_QUOTES) : '';
                                $hhc = !empty($_POST['helpingHandContribution']) ? htmlspecialchars($_POST['helpingHandContribution'], ENT_QUOTES) : '';
                                /*
                                $tsq = !empty($_POST['teeShirtQuantity']) ? htmlspecialchars($_POST['myPhone'], ENT_QUOTES) : '';
                                $tss = !empty($_POST['teeShirtSize']) ? htmlspecialchars($_POST['myPhone'], ENT_QUOTES) : '';
                                $tsg = !empty($_POST['teeShirtGender']) ? htmlspecialchars($_POST['myPhone'], ENT_QUOTES) : '';
                                */
                                $cBox = !empty($_POST['paymentCheckBox']) ? htmlspecialchars($_POST['paymentCheckBox'], ENT_QUOTES) : '';
                                $pm = !empty($_POST['paymentMethod']) ? htmlspecialchars($_POST['paymentMethod'], ENT_QUOTES) : '';
                                /*
                                 $total = getTotal($register, $ebmb, $mtsd, $rucb, $ics, $hhc, $tsq, $tss);
                                */
                                $total = getTotal($register, $ebmb, $mtsd, $rucb, $ics, $hhc);

                                // Send email notification to the site admin 
                                $to = $email;
                                $subject = 'Registration Form Submitted';
                                $htmlContent = " 
                    <h4>Registration Form - EN</h4> 
                    <p><b>Name: </b>" . $firstName . " " . $lastName . "</p> 
                    <p><b>Badge Name: </b>" . $badgeName . "</p> 
                    <p><b>Email: </b>" . $email . "</p> 
                    <p><b>Phone: </b>" . $phone . "</p> 
                    <p><b>Address: </b>" . $address . "</p> 
                    <p><b>City: </b>" . $city . "</p> 
                    <p><b>State: </b>" . $state . "</p> 
                    <p><b>Zip Code: </b>" . $zc . "</p> 
                    <p><b>Fellowship: </b>" . $fs . "</p> 
                    <p><b>Homegroup: </b>" . $hg . "</p> 
                    <p><b>Registration: </b>" . $register . "</p> 
                    <p><b>Early Bird Meal Bundle: </b>" . $ebmb . "</p> 
                    <p><b>Meet the Speaker Dinner: </b>" . $mtsd . "</p> 
                    <p><b>Round Up Cont. Breakfast: </b>" . $rucb . "</p> 
                    <p><b>Ice Cream Social: </b>" . $ics . "</p> 
                    <p><b>Sat. Night Dance: </b>" . $snd . "</p> 
                    <p><b>Helping Hand Contribution: </b>" . $hhc . "</p> 
                    <p><b>Current Total: </b>$" . $total . ".00</p> 
                    <p><b>I agreed with the ToS and understand registration is incomplete until paid: </b>" . $cBox . "</p> 
                    <p><b>Payment Method: </b>" . $pm . "</p> 
                ";
                                /*
                    <p><b>Tee Shirt Quantity : </b>" . $tsq . "</p> 
                    <p><b>Tee Shirt Size: </b>" . $tss . "</p> 
                    <p><b>Tee Shirt Style: </b>" . $tsg . "</p> 
                */

                                // Always set content-type when sending HTML email 
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                                // More headers 
                                $headers .= 'From: MBAR SysAdmin<' . $recipientEmail . '>' . "\r\n";

                                $headers .= 'Bcc: ' . $recipientEmail . "," . $bccEmail . "\r\n";

                                // Send email 
                                mail($to, $subject, $htmlContent, $headers);

                                $status = 'success';
                                $statusMsg = 'Your pre-registration was sent, and it will assist with event planning and preparation. Thank you! A copy of your registration form has been emailed to you.';
                                $postData = '';

                                regFormData($total, $lang);
                            } else {
                                $statusMsg = 'reCaptcha verification failed, please try again.';
                            }
                        } else {
                            $statusMsg = 'Please check the reCAPTCHA checkbox.';
                        }
                    } else {
                        $statusMsg = 'Please fill all the mandatory fields.';
                        if (!empty($_POST['beeName'])) {
                            $statusMsg = 'Are you a bot?';
                        }
                    }
                }

                ?>


                <?php if (!empty($statusMsg)) { ?>
                    <div class="col-xl-8 col-lg-8 col-md-12 pt-4">
                        <div class="p-3 text-center text-bg-light hero-text-border" title="Online registration form message.">
                            <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-xl-10 col-lg-10 col-md-12 py-4">

                    <form action="register-now.php" method="POST" class="needs-validation" id="myForm" aria-label="Registration Form" novalidate>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Personal Information</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <label for="beeName" aria-hidden="true" class="visually-hidden">Sunflower Name</label>
                                    <input type="text" name="beeName" id="beeName" style="display:none">

                                    <label for="firstName" class="reg-form-label">First Name (Required)</label>
                                    <input type="text" class="form-control" name="firstName" id="firstName" required>
                                    <div class="invalid-feedback">
                                        Required, please enter your first name.
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="lastName" class="reg-form-label">Last Name or Initial (Required)</label>
                                    <input type="text" class="form-control" name="lastName" id="lastName" required>
                                    <div class="invalid-feedback">
                                        Required, please enter your last name or initial.
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <label for="badgeName" class="reg-form-label">Name to Appear on Badge</label>
                                    <input type="text" class="form-control" name="badgeName" id="badgeName">
                                    <div class="invalid-feedback">
                                        Optional, please enter your name to appear on badge.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="myEmail" class="reg-form-label">Email (Required)</label>
                                    <input type="email" class="form-control" name="myEmail" id="myEmail" required>
                                    <div class="invalid-feedback">
                                        Required, please enter your email.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="myPhone" class="reg-form-label">Phone with Area Code (xxx.xxx.xxxx)</label>
                                    <input type="tel" class="form-control" name="myPhone" id="myPhone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$">
                                    <div class="invalid-feedback">
                                        Optional, please enter a valid phone number.
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <label for="myAddress" class="reg-form-label">Mailing Address</label>
                                    <input type="text" class="form-control" name="myAddress" id="myAddress">
                                    <div class="invalid-feedback">
                                        Optional, please enter your address.
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label for="myCity" class="reg-form-label">City</label>
                                    <input type="text" class="form-control" name="myCity" id="myCity" placeholder="Monterey">
                                    <div class="invalid-feedback">
                                        Optional, please enter a city.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="myState" class="reg-form-label">State</label>
                                    <select class="form-select" name="myState" id="myState">
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
                                        Optional, please select your state.
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="myZipcode" class="reg-form-label">Zip Code</label>
                                    <input type="text" class="form-control" name="myZipcode" id="myZipcode">
                                    <div class="invalid-feedback">
                                        Optional, please enter your zip code.
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Fellowship Information</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <label for="myFellowship" class="reg-form-label">Program (Required)</label>
                                    <select class="form-select" name="myFellowship" id="myFellowship" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="A.A.">A.A.</option>
                                        <option value="Al-Anon">Al-Anon</option>
                                        <option value="Double Winner">Double Winner</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please enter your Fellowship
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <label for="myHomegroup" class="reg-form-label">Homegroup(s)</label>
                                    <input type="text" class="form-control" name="myHomegroup" id="myHomegroup">
                                    <div class="invalid-feedback">
                                        Optional, please enter your Homegroup(s)
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Registration and Activities</legend>
                            <div class="row justify-content-center">
                                <div class="col-lg-5">
                                    <p class="h5">Registration (Required)</p>
                                    <span class="sr-only">(Use the arrow keys to make your choice)</span>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="early-registration" name="myRegistration" value="ebr" onChange="optionSND(this)" required>
                                        <label class="form-check-label" for="early-registration">Early Registration (Before July 31, 2024) - $45</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input type="radio" class="form-check-input" id="normal-registration" name="myRegistration" value="after" onChange="optionSND(this)" required>
                                        <label class="form-check-label" for="normal-registration">Registration (After July 31, 2024) - $50</label>
                                        <div class="invalid-feedback">
                                            Required, please check one.
                                        </div>
                                    </div>
                                    <ul>
                                        <li>Register before July 31 and $1.00 of your registration goes toward the 50/50 drawing held Saturday Night.</li>
                                        <li>Saturday Night Dance is free with your paid registration.</li>
                                    </ul>
                                </div>

                                <div class="col-lg-7 pb-4">
                                    <p class="h5">Pre-Registration for meals is currently required.</p>
                                    <ul>
                                        <li>The MBAR Committee recommends the Early Bird Meal Bundle which includes a $5 savings from the à la carte option
                                        </li>
                                        <li>Continental Breakfast and Dinner at Bethlehem Lutheran Church, 800 Cass Street, Monterey
                                        </li>
                                        <li>Ice Cream Social will be held at the Conference Center on the Stevenson Terrace
                                        </li>
                                    </ul>

                                    <label for="earlyBirdMealBundle" class="reg-form-label">Early Bird Meal Bundle (Dinner, Breakfast, and Ice Cream Social) - $35 </label>
                                    <select class="form-select" name="earlyBirdMealBundle" id="earlyBirdMealBundle" onChange="optionEBMB(this)" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="yes">Yes, please!</option>
                                        <option value="no">No thank you</option>
                                        <option value="undecided" disabled>Still deciding</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please select one.
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <p class="h5"> À la carte Meal Options - If you prefer to purchase meals individually, please select from the following options.</p>
                                </div>

                                <div class="col-lg-4">
                                    <label for="meetTheSpeakerDinner" class="reg-form-label">Meet The Speaker's Dinner (Saturday Night @ 5:00pm) - $25 </label>
                                    <select class="form-select" name="meetTheSpeakerDinner" id="meetTheSpeakerDinner" onChange="optionCHANGE()" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="yes">Yes, please!</option>
                                        <option value="no">No thank you</option>
                                        <option value="undecided">Still deciding</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please select one.
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <label for="roundupContinentalBreakfast" class="reg-form-label">Round-Up Continental Breakfast (Sunday @ 8:00am to 9:30am) - $10</label>
                                    <select class="form-select" name="roundupContinentalBreakfast" id="roundupContinentalBreakfast" onChange="optionCHANGE()" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="yes">Yes, please!</option>
                                        <option value="no">No thank you</option>
                                        <option value="undecided">Still deciding</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please select one.
                                    </div>
                                </div>

                                <div class="col-lg-4 pb-4">
                                    <label for="iceCreamSocial" class="reg-form-label">Ice Cream Social (Sunday Afternoon @ 3:00pm to 4:00pm) - $5</label>
                                    <select class="form-select" name="iceCreamSocial" id="iceCreamSocial" onChange="optionCHANGE()" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option value="yes">Yes, please!</option>
                                        <option value="no">No thank you</option>
                                        <option value="undecided">Still deciding</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please select one.
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <label for="saturdayNightDance" class="reg-form-label">Saturday Night Dance @ Conference Center (FREE with paid registration or $5 at the door)</label>
                                    <select class="form-select" name="saturdayNightDance" id="saturdayNightDance">
                                        <option selected disabled value="">Choose...</option>
                                        <option value="yes">I'll be wearing my dancing shoes!</option>
                                        <option value="no">I don't dance...LOL</option>
                                        <option value="undecided">Still deciding</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Optional, please select one.
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="helpingHandContribution" class="reg-form-label">Helping Hand Contribution, please consider making a contribution to ensure all who desire to attend are able.</label>
                                    <select class="form-select" name="helpingHandContribution" id="helpingHandContribution">
                                        <option selected disabled value="">Choose...</option>
                                        <option value="5">$5</option>
                                        <option value="10">$10</option>
                                        <option value="20">$20</option>
                                        <option value="35">$35</option>
                                        <option value="45">$45</option>
                                        <option value="50">$50</option>
                                        <option value="100">$100</option>
                                        <option value="other">Other</option>
                                        <option value="no thank you">No thank you</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Optional, please enter your Contribution.
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="text-bg-light pb-3 mb-3">
                            <legend>Merchandise</legend>
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <p class="h5">Pre-order your online gear until July 31st.</p>
                                    <ul>
                                        <li>$26 for size Small to X-Large and $31.00 for size XX-Large and 3X-Large
                                        </li>

                                        <li>MBAR! Wear this MBAR favorite apparel to the big event or just hanging out around the house.
                                        </li>

                                        <li>100% Cotton, Solid Navy Blue, White and Gold Logo, Lightweight, Classic Fit, Double-needle Short Sleeve and Bottom Hem
                                        </li>
                                    </ul>
                                    <p class="pt-3">Limited quantity of tee shirts will be on sale at conference.  If you do not want one at this time, select zero quantity, and continue on to complete registration.
                                    </p>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <label for="shirtQuantity" class="reg-form-label">Quantity</label>
                                            <select class="form-select" name="shirtQuantity" id="shirtQuantity" onChange="optionSHIRT()">
                                                <option selected value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Optional, please enter your quantity
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <label for="shirtSize" class="reg-form-label">Size</label>
                                            <select class="form-select" name="shirtSize" id="shirtSize">
                                                <option selected disabled value="none">Choose...</option>
                                                <option value="sm">Small</option>
                                                <option value="med">Medium</option>
                                                <option value="lg">Large</option>
                                                <option value="xl">X-Large</option>
                                                <option value="xxl">XX-Large</option>
                                                <option value="3xl">3X-Large</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Optional, please enter your size
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="shirtGender" class="reg-form-label">Style</label>
                                            <select class="form-select" name="shirtGender" id="shirtGender">
                                                <option selected disabled value="none">Choose...</option>
                                                <option value="men">Men's</option>
                                                <option value="women">Women's</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Optional, please enter your style
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4 pt-3">
                                    <img src="../images/2024_mbar_tee_shirt.png" class="img-fluid img-thumbnail" alt="Navy blue tee shirt with gold and white logo.">
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
                                            I agree to terms of service AND <strong>understand registration is incomplete until paid.</strong>(Required)
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
                                        <option value="cash">Cash</option>
                                        <option value="check">Check</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Required, please select one.
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
                                <button type="submit" class="btn btn-primary" name="submit">Submit Form</button>
                            </div>

                            <div class="col-md-6 text-center mb-3">
                                <button type="reset" class="btn btn-primary" name="reset" value="reset" onclick="return resetFields();" aria-labelledby="reset">Reset Form</button>
                                <div class="sr-only" id="reset" role="alert" aria-live="assertive" aria-atomic="true">
                                    <p>(A pop up will confirm your reset)</p>
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
            <div class="row justify-content-center mb-5">
                <div id="payment-now"></div>
                <div class="col-xl-8 col-lg-8 col-md-12 py-4">
                    <div class="p-3 text-center text-bg-light hero-text-border" title="Payment Methods">
                        <h3 class="card-title mb-3">Payment Methods
                        </h3>
                        <p><strong>Please add your registration name in the payment. If you are paying for <i>more</i> than one person, add their name(s) in the note section.</strong>
                        </p>
                        <p class="bb-link">Remember: Your payment completes your registration!
                        </p>
                        <p>The QR codes below require the mobile apps. If you need some assistance with making a payment, please send an email to <a href="mailto:<?php echo getenv('mbar-to-email') ?>" class="bb-link">System Admin</a>.
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 py-5">
                                <img src="../images/venmo-qrCode.png" class="img-fluid shadow-wrap" alt="Venmo QR code" title="Venmo qrCode">
                                <p class="text-center pt-4"><?php echo getenv('mbar-venmo') ?></p>
                            </div>
                            <div class="col-sm-6 py-5">
                                <img src="../images/paypal-qrCode.png" class="img-fluid shadow-wrap" alt="PayPal QR code" title="PayPal qrCode">
                                <p class="text-center pt-4"><?php echo getenv('mbar-treas-email') ?></p>
                            </div>
                            <p>The links below provide general payment instructions.</p>
                            <p class="mb-3"><a href="https://help.venmo.com/hc/en-us/articles/210413477-Sending-Requesting-Money" class="bb-link" target="_blank" rel="noopener noreferrer" title="Direct link to Venmo">How can I send a payment or request money with Venmo?<span class="sr-only">(Opens a new window)</span></a></p>
                            <p class="mb-3"><a href="https://www.paypal.com/in/cshelp/article/how-do-i-send-payments-help293" class="bb-link" target="_blank" rel="noopener noreferrer" title="Direct link to PayPal">How do I send payments with PayPal?<span class="sr-only">(Opens a new window)</span></a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </article>

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