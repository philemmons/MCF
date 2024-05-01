<?php
ob_start();
session_start();

if (!isset($_SESSION["status"]) || ($_SESSION['status'] != getenv('LOGIN_STATUS'))) {  //Check whether the admin has logged in
    header("Location: _login.php");
}

include_once 'header.inc';

include_once 'php/source.php';
include_once 'php/dbConnection.php';

$dbConn = getDBConnection();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
}

//NOTE: the next 3 sections of code sequence matters for the updated output

$status = $statusMsg = '';

if (isset($_POST['submitInsert'])) {  //admin has submitted the "new user" form

    $fPhone = preg_replace('/[^0-9]/', '', $_POST['ins-phone']);

    $qf = !empty($_POST['upd-qf']) ? htmlspecialchars($_POST['upd-qf'], ENT_QUOTES) : '';

    $subtotal = getAmount($qf, 12.5);
    $postage = getAmount($qf, 6.0);

    $total = $postage + $subtotal;

    $tos = 1;


    $sql = "INSERT INTO requisition (
                firstname,
                lastname,
                email,
                phone,
                address,
                city,
                state,
                zipcode,
                quanflowers,
                tos,
                payment,
                total,
                paid,
                rstatus,
                lang,
                transid,
                buyerlead
                ) VALUES (
                    :firstName, :lastName, :email, :phone, :address, :city, :state, :zc, :qf, $tos, :pm, $total, :paid, :rs, :lang, :tid, :bl
                )";

    $nPara[':firstName'] = strtolower(htmlspecialchars($_POST['ins-fn'], ENT_QUOTES));
    $nPara[':lastName'] = strtolower(htmlspecialchars($_POST['ins-ln'], ENT_QUOTES));
    $nPara[':email'] = strtolower(htmlspecialchars($_POST['ins-em'], ENT_QUOTES));
    $nPara[':phone'] = strtolower(htmlspecialchars($fPhone, ENT_QUOTES));
    $nPara[':address'] = strtolower(htmlspecialchars($_POST['ins-addr'], ENT_QUOTES));
    $nPara[':city'] = strtolower(htmlspecialchars($_POST['ins-city'], ENT_QUOTES));
    $nPara[':state'] = strtolower(htmlspecialchars($_POST['ins-state'], ENT_QUOTES));
    $nPara[':zc'] = strtolower(htmlspecialchars($_POST['ins-zc'], ENT_QUOTES));
    $nPara[':qf'] = strtolower(htmlspecialchars($_POST['ins-qf'], ENT_QUOTES));
    $nPara[':pm'] = strtolower(htmlspecialchars($_POST['ins-pm'], ENT_QUOTES));
    $nPara[':paid'] = htmlspecialchars($_POST['ins-paid'], ENT_QUOTES);
    $nPara[':rs'] = strtolower(htmlspecialchars($_POST['ins-rs'], ENT_QUOTES));
    $nPara[':lang'] = strtolower(htmlspecialchars($_POST['ins-lang'], ENT_QUOTES));
    $nPara[':tid'] = strtolower(htmlspecialchars($_POST['ins-tid'], ENT_QUOTES));
    $nPara[':bl'] = strtolower(htmlspecialchars($_POST['ins-bl'], ENT_QUOTES));

    // print_r($nPara); die;

    $stmt = $dbConn->prepare($sql);
    $stmt->execute($nPara);

    $nPara = array();

    $status = 'success';
    $statusMsg = "Order Accepted";
} else {
    $status = 'error';
    $statusMsg = 'Please fill all the mandatory fields.';
}

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


    <header>
        <!-- Hero Section -->
        <div class="container-fluid">
            <div class="row justify-content-center align-items-end bg-frame bg-img-login" title="Welcome Admin">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Order Update</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Order Update">
                        <h1 class="bswash-font pb-4 px-3 px-md-0">Add New Order
                        </h1>
                        <p class="h6 text-light"> Welcome <?= ucwords($_SESSION['name']) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Middle Navbar -->
    <nav class="navbar navbar-expand-lg mb-5 mcf-navbar-dark" aria-label="middle menu">
        <div class="container">
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#midNavBar" aria-controls="midNavBar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="pe-2">Admin Menu</span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="midNavBar">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link px-2" href="_admin.php">Admin Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2 active" aria-current="page" href="orderInsert.php">New Order<span class="visually-hidden">(current)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-2" href="orderUpdate.php">Update Order</span></a>
                    </li>
                    <?php
                    if (isset($_SESSION["status"])) {
                        echo '<li class="nav-item">';
                        echo '<div role= "form">';
                        echo '<form method ="POST" >';
                        echo '<input type="submit" value="LogOut" class="nav-link log-input px-2" name="logout">';
                        echo '</form>';
                        echo '</div>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>


    <main id="main-content">
        <!-- Part One -->
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">

                <?php if (!empty($statusMsg)) { ?>
                    <div class='row'>
                        <div class="col-xl-8 col-lg-8 col-md-12 pt-4 mx-auto">
                            <div class="p-3 text-center text-bg-light hero-text-border" title="Online order form message.">
                                <p class="mb-6 h5 status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <div class="col-xl-12 py-4">
                    <h3>New Order Information</h3>
                    <br>

                    <form method='POST' name="insertOrderForm" class="row g-3 needs-validation" id="insertOrderForm" novalidate>

                        <div class="col-lg-1">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="ins-id" placeholder="Default - auto incremented" name="ins-id" disabled>
                                <label for="ins-id">ID</label>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="ins-fn" id="ins-fn" placeholder="Enter first Name" required>
                                <label for="ins-fn">First Name*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter first name.
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="ins-ln" id="ins-ln" placeholder="Enter last name" required>
                                <label for="ins-ln" class="form-label">Last Name*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter last name.
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="ins-em" id="ins-em" placeholder="Enter email" required>
                                <label for="ins-em" class="form-label">Email*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter email.
                            </div>
                        </div>

                        <hr>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <input type="tel" class="form-control" name="ins-phone" id="ins-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="831.555.0714">
                                <label for="ins-phone" class="form-label">Phone (xxx.xxx.xxxx)</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter phone number.
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <select class="form-select" name="ins-bl" id="ins-bl">
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
                                <label for="ins-bl" class="form-label">Customer Lead</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Select one.
                            </div>
                        </div>

                        <hr>

                        <div class="col-lg-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="ins-addr" id="ins-addr" placeholder="Enter mail address" required>
                                <label for="ins-addr" class="form-label">Address*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter address.
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="ins-city" id="ins-city" placeholder="Enter city" required>
                                <label for="ins-city" class="form-label">City*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter city.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <select class="form-select" name="ins-state" id="ins-state" required>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA" selected>California</option>
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
                                <label for="ins-state" class="form-label">State*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Select one.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="ins-zc" id="ins-zc" placeholder="Enter zip code" required>
                                <label for=" ins-zc" class="form-label">Zip Code*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter zip code.
                            </div>
                        </div>

                        <hr>

                        <div class="col-lg-3">
                            <div class="form-floating">
                                <select class="form-select" name="ins-pm" id="ins-pm" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="venmo">Venmo</option>
                                    <option value="cash">Cash</option>
                                    <option value="check">Check</option>
                                    <option value="paypal">PayPal</option>
                                </select>
                                <label for="ins-pm" class="form-label">Payment Method*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Select one.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="ins-total" id="ins-total" placeholder="Automatic" value="Auto" disabled>
                                <label for="ins-total">Total</label>
                            </div>
                            <div class="invalid-feedback">
                                Total due is calculated.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="ins-paid" id="ins-paid" placeholder="0" value=0 required>
                                <label for="ins-paid">Paid*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter paid amount.
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="ins-tid" id="ins-tid" value="tbd">
                                <label for="ins-tid" class="form-label">Trans ID</label>
                            </div>
                            <div class="invalid-feedback">
                                Optional - Enter transaction ID.
                            </div>
                        </div>

                        <hr>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="ins-qf" id="ins-qf" placeholder="1 or more" value="" required>
                                <label for="ins-qf" class="form-label"># Flowers*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter flower quantity.
                            </div>
                        </div>


                        <div class="col-lg-2">
                            <div class="form-floating">
                                <select class="form-select" name="ins-rs" id="ins-rs" required>
                                    <option value="complete">Complete</option>
                                    <option selected value="incomplete">Incomplete</option>
                                </select>
                                <label for="ins-rs" class="form-label">Status</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Select one.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="ins-dt" id="ins-dt" placeholder="Automatic" value="Auto" disabled>
                                <label for="ins-dt">Order Date</label>
                            </div>
                            <div class="invalid-feedback">
                                Date time is automatic
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <select class="form-select" name="ins-lang" id="ins-lang" required>
                                    <option disabled value="">Choose...</option>
                                    <option value="en" selected>English(EN)</option>
                                    <option value="es">Spanish(SP)</option>
                                    <option value="other">Other</option>
                                </select>
                                <label for="ins-lang" class="form-label">Language*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter Language.
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-floating">
                                <input type="number" class="form-control" id="ins-tos" placeholder="Default" name="ins-tos" value="1" required>
                                <label for="ins-tos">Terms of Service*</label>
                            </div>
                            <div class="invalid-feedback">
                                Required - Enter TOS of one.
                            </div>
                        </div>

                        <hr>

                        <div class="col-lg-3 text-center">
                            <button type="submit" class="btn mcf-button btn-sm" name="submitInsert" value='update'>Submit Order</button>
                        </div>

                        <div class="col-lg-3 text-center">
                            <button type="reset" class="btn mcf-button" name="reset" value="reset" onclick="return resetFields();" aria-labelledby="reset">Reset Form</button>
                            <div class="sr-only" id="reset" role="alert" aria-live="assertive" aria-atomic="true">
                                <p>(A pop up will confirm your reset form)</p>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <a href="_admin.php" class="btn mcf-button btn-sm" style="float:right;">Return to Admin</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>


        <?php include_once 'footer.inc' ?>
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
            function myReset(thisForm) {
                document.getElementById(thisForm).reset();
            }
        </script>

</body>

</html>