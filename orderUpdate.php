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

if (isset($_POST['submitUpdate'])) {  //admin has submitted the "update user" form

    $fPhone = preg_replace('/[^0-9]/', '', $_POST['upd-phone']);

    $qf = !empty($_POST['upd-qf']) ? htmlspecialchars($_POST['upd-qf'], ENT_QUOTES) : '';

    $subtotal = getAmount($qf, 12.5);
    $postage = getAmount($qf, 6.0);

    $total = $postage + $subtotal;

    $sql = "UPDATE requisition
            SET 
                firstname = :firstName,
                lastname = :lastName,
                email = :email,
                phone = :phone,
                address = :address,
                city = :city,
                state = :state,
                zipcode = :zc,
                quanflowers = :qf,
                tos = :tos,
                payment = :pm,
                total = $total,
                paid = :paid,
                rstatus = :rs,
                lang = :lang,
                transid = :tid
            WHERE id = :reg_id";


    $nPara[':reg_id'] = htmlspecialchars($_GET['id'], ENT_QUOTES);
    $nPara[':firstName'] = strtolower(htmlspecialchars($_POST['upd-fn'], ENT_QUOTES));
    $nPara[':lastName'] = strtolower(htmlspecialchars($_POST['upd-ln'], ENT_QUOTES));
    $nPara[':email'] = strtolower(htmlspecialchars($_POST['upd-em'], ENT_QUOTES));
    $nPara[':phone'] = strtolower(htmlspecialchars($fPhone, ENT_QUOTES));
    $nPara[':address'] = strtolower(htmlspecialchars($_POST['upd-addr'], ENT_QUOTES));
    $nPara[':city'] = strtolower(htmlspecialchars($_POST['upd-city'], ENT_QUOTES));
    $nPara[':state'] = strtolower(htmlspecialchars($_POST['upd-state'], ENT_QUOTES));
    $nPara[':zc'] = strtolower(htmlspecialchars($_POST['upd-zc'], ENT_QUOTES));
    $nPara[':qf'] = strtolower(htmlspecialchars($_POST['upd-qf'], ENT_QUOTES));
    $nPara[':tos'] = strtolower(htmlspecialchars($_POST['upd-tos'], ENT_QUOTES));
    $nPara[':pm'] = strtolower(htmlspecialchars($_POST['upd-pm'], ENT_QUOTES));
    $nPara[':paid'] = htmlspecialchars($_POST['upd-paid'], ENT_QUOTES);
    $nPara[':rs'] = strtolower(htmlspecialchars($_POST['upd-rs'], ENT_QUOTES));
    $nPara[':lang'] = strtolower(htmlspecialchars($_POST['upd-lang'], ENT_QUOTES));
    $nPara[':tid'] = strtolower(htmlspecialchars($_POST['upd-tid'], ENT_QUOTES));

    $stmt = $dbConn->prepare($sql);
    $stmt->execute($nPara);

    $nPara = array();
}

?>

<body>

    <nav class="navbar navbar-expand-lg mcf-navbar-light">
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
                        <a class="nav-link px-2" href="contact.php" aria-current="page">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main id="main-content">

        <!-- Hero Section -->
        <section class="container-fluid">
            <div class="row justify-content-center align-items-end bg-frame bg-img-login" title="Welcome Admin">
                <div class="col-xl-6 col-lg-7 col-md-9">
                    <div class="text-center">
                        <p class="fw-bold ">
                            <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Order Update</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Order Update">
                        <h1 class="header-font pb-4 px-3 px-md-0">Order Update
                        </h1>
                        <p class="h6 text-light"> Welcome <?= ucwords($_SESSION['name']) ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bottom Navbar -->
        <nav class="navbar navbar-expand-lg mb-5 mcf-navbar-dark" aria-label="middle navigation">
            <div class="container">
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#bottomNavBar" aria-controls="bottomNavBar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="pe-2">Admin Menu</span>
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="bottomNavBar">
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link px-2" aria-current="page" href="_admin.php">Admin Panel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="orderInsert.php">New Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 active" href="orderUpdate.php">Update Order<span class="visually-hidden">(current)</span></a>
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

        <!-- Part One -->
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-12 py-4">
                    <h3>Update Order Information</h3>

                    <br>

                    <?php
                    if (isset($_GET['id'])) {
                        $orderInfo = getOrderInfo($_GET['id']);
                    ?>
                        <form method='POST' name="updateRegForm" class="row g-3 needs-validation" id="updateRegForm" novalidate>

                            <div class="col-lg-1">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="upd-id" placeholder="Default - auto incremented" name="upd-id" value="<?= $orderInfo['id'] ?>" disabled>
                                    <label for="upd-id">RegID</label>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="upd-fn" id="upd-fn" placeholder="Enter FN" value="<?= $orderInfo['firstname'] ?>" required>
                                    <label for="upd-fn">First Name</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Enter first name.
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="upd-ln" id="upd-ln" placeholder="Enter LN" value="<?= $orderInfo['lastname'] ?>" required>
                                    <label for="upd-ln" class="form-label">Last Name</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Enter last name.
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="upd-em" id="upd-em" placeholder="Enter EM" value="<?= $orderInfo['email'] ?>" required>
                                    <label for="upd-em" class="form-label">Email</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Enter email.
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" name="upd-phone" id="upd-phone" pattern="^(\+\d{1,2}\s?)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$" placeholder="Enter PH" value="<?= formatPhone($orderInfo['phone']); ?>">
                                    <label for="upd-phone" class="form-label">Phone</label>
                                </div>
                                <div class="invalid-feedback">
                                    Optional - Enter phone number.
                                </div>
                            </div>

                            <hr>

                            <div class="col-lg-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="upd-addr" id="upd-addr" placeholder="Enter MA" value="<?= $orderInfo['address'] ?>" required>
                                    <label for="upd-addr" class="form-label">Address</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Enter address.
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="upd-city" id="upd-city" placeholder="Enter CI" value="<?= $orderInfo['city'] ?>" required>
                                    <label for="upd-city" class="form-label">City</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Enter city.
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <select class="form-select" name="upd-state" id="upd-state" required>
                                        <option value="<?= $orderInfo['state'] ?>" selected> <?php echo $orderInfo['state'] ?></option>
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
                                    <label for="upd-state" class="form-label">State</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Select one.
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="upd-zc" id="upd-zc" placeholder="Enter ZC" value="<?= $orderInfo['zipcode'] ?>" required>
                                    <label for=" upd-zc" class="form-label">Zip Code</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Enter zip code.
                                </div>
                            </div>

                            <hr>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <select class="form-select" name="upd-pm" id="upd-pm" required>
                                        <option value="<?= $orderInfo['payment'] ?>" selected> <?php echo $orderInfo['payment'] ?></option>
                                        <option value="venmo">Venmo</option>
                                        <option value="cash">Cash</option>
                                        <option value="check">Check</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                    <label for="upd-pm" class="form-label">Payment Method</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Select one.
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="upd-total" id="upd-total" placeholder="Enter TO" value="<?= $orderInfo['total'] ?>">
                                    <label for="upd-total">Total</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Enter total amount.
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <input type="number" class="form-control" name="upd-paid" id="upd-paid" placeholder="Enter PA" value="<?= $orderInfo['paid'] ?>">
                                    <label for="upd-paid">Paid</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Enter paid amount.
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="upd-tid" id="upd-tid" placeholder="Enter Code" value="<?= $orderInfo['transid'] ?>">
                                    <label for="upd-tid" class="form-label">Trans ID</label>
                                </div>
                                <div class="invalid-feedback">
                                    Optional - Enter transaction ID.
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="upd-qf" id="upd-qf" placeholder="Enter QF" value="<?= $orderInfo['quanflowers'] ?>" required>
                                    <label for=" upd-qf" class="form-label"># Flowers</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Enter flower quantity.
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <select class="form-select" name="upd-rs" id="upd-rs">
                                        <option value="<?= $orderInfo['rstatus'] ?>" selected> <?php echo $orderInfo['rstatus'] ?></option>
                                        <option value="complete">Complete</option>
                                        <option value="incomplete">Incomplete</option>
                                    </select>
                                    <label for="upd-rs" class="form-label">Status</label>
                                </div>
                                <div class="invalid-feedback">
                                    Optional - Select one.
                                </div>
                            </div>

                            <hr>

                            <div class="col-lg-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="upd-dt" placeholder="Default" name="upd-dt" value="<?= $orderInfo['datetime'] ?>" disabled>
                                    <label for="upd-dt">Order Date</label>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-floating">
                                    <select class="form-select" name="upd-lang" id="upd-lang" required>
                                        <option value="<?= $orderInfo['lang'] ?>" selected> <?php echo $orderInfo['lang'] ?></option>
                                        <option value="en">English(EN)</option>
                                        <option value="es">Spanish(ES)</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <label for="upd-lang" class="form-label">Language</label>
                                </div>
                                <div class="invalid-feedback">
                                    Required - Enter language.
                                </div>
                            </div>

                            <hr>

                            <div class="col-lg-3 text-center">
                                <button type="submit" class="btn mcf-button btn-sm mcf-btn-wide" name="submitUpdate" value='update'>Update Order</button>
                            </div>

                            <div class="col-lg-3 text-center">
                                <button type="reset" name="reset" value="reset" class="btn mcf-button btn-sm mcf-btn-wide"> Reset Order</button>
                            </div>

                            <div class="col-lg-6">

                            <?php } else {  ?>
                                <p class="h6"> Hello, there was no Registration selected which to update, and please select one from the Admin panel.</p>

                                <div class="col-lg-12">
                                <?php } ?>

                                <a href="_admin.php" class="btn mcf-button btn-sm mcf-btn-wide" style="float:right;">Return to Admin</a>

                                </div>
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