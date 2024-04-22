<?php
ob_start();
session_start();

if (!isset($_SESSION["status"]) || ($_SESSION['status'] != getenv('LOGIN_STATUS'))) {  //Check whether the admin has logged in
    header("Location: _login.php");
}

include_once 'header.inc';
include_once 'php/source.php';

$dbConn = getDBConnection();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
}

/**** order totals ****/


/**** pricing ****/

if (isset($_POST['filterForm']) && ($_POST['regType'] != 'all')) {
    if ($_POST['regType'] == 'incomplete') {
        $statusMsg = "Incomplete Orders";
    } else {
        $statusMsg = "Completed Orders";
    }
} else {
    $statusMsg = "All Orders";
}

function getZeroPara()
{
    global $dbConn;

    $sql = "SELECT count(*) as result FROM requisition";
    //echo $sql . '<br>';
    $tot =  preExeFetNOPARA($sql);
    //print_r($tot);
    return $tot[0]['result'];
}


function getOnePara($alpha)
{
    global $dbConn;

    $sql = "SELECT SUM(" . $alpha . ") as result FROM requisition";
    //echo $sql . '<br>';
    $tot =  preExeFetNOPARA($sql);
    //print_r($tot);
    return $tot[0]['result'];
}


function getTwoPara($alpha, $beta)
{
    global $dbConn;

    $sql = "SELECT count(*) as result FROM requisition where " . $alpha . " like '" . $beta . "'";
    //echo $sql . '<br>';
    $tot =  preExeFetNOPARA($sql);
    //print_r($tot);
    return $tot[0]['result'];
}

function getTwoParaSum($alpha, $beta)
{
    global $dbConn;

    $sql = "SELECT sum(total) as result FROM requisition where " . $alpha . " like '" . $beta . "'";
    //echo $sql . '<br>';
    $tot =  preExeFetNOPARA($sql);
    //print_r($tot);
    return $tot[0]['result'];
}

function getHelpHand()
{
    global $dbConn;

    $sql = "SELECT SUM( CAST(helpinghand AS UNSIGNED) ) AS result FROM requisition WHERE helpinghand REGEXP '[0-9]'";
    //echo $sql . '<br>';
    $tot =  preExeFetNOPARA($sql);
    //print_r($tot);
    return $tot[0]['result'];
}

function displayTot($tot)
{
    //foreach ($tot as $part) {
    //echo $part['result'] . " ";
    //}
    echo $tot[0]['result'];
}


/* requisition display with update and delete buttons for each */
function displayOrderAdmin($requisition)
{
    foreach ($requisition as $eachOrder) {

        $fPhone = formatPhone($eachOrder['phone']);

        echo "<tr>";
        echo "<td>" . $eachOrder['result'] . "</td>";
        echo "<td>" . $eachOrder['firstname'] . "</td>";
        echo "<td>" . $eachOrder['lastname'] . "</td>";
        echo "<td>" . $eachOrder['email'] . "</td>";

        echo "<td>
    <a href='orderUpdate.php?id=" . $eachOrder['id'] . "'>
      <button type=\"button\" class=\"btn btn-success btn-sm\"> Update </button>
    </a>";
        echo "</td>";

        echo "<td>
    <a href='deleteOrder.php?id=" . $eachOrder['id'] . "' onclick= 'return confirmDelete(\"" . $eachOrder['email'] . "\")' >
      <button type=\"button\" class=\"btn btn-danger btn-sm\"> Delete </button>
    </a>";
        echo "</td>";

        echo "<td>" . $eachOrder['payment'] . "</td>";
        echo "<td>" . $eachOrder['total'] . "</td>";
        echo "<td>" . $eachOrder['paid'] . "</td>";
        echo "<td>" . $eachOrder['rstatus'] . "</td>";
        echo "<td>" . $fPhone . "</td>";
        echo "<td>" . $eachOrder['address'] . "</td>";
        echo "<td>" . $eachOrder['city'] . "</td>";
        echo "<td>" . $eachOrder['state'] . "</td>";
        echo "<td>" . $eachOrder['zipcode'] . "</td>";
        echo "<td>" . $eachOrder['quanflowers'] . "</td>";
        echo "<td>" . $eachOrder['lang'] . "</td>";
        echo "<td>" . $eachOrder['tos'] . "</td>";
        echo "<td>" . $eachOrder['transid'] . "</td>";
        echo "</tr>";
    }
}


?>

<script>
    function confirmDelete($user) {
        var confirmDelete = confirm("Do you really want to delete: " + $user + "");
        if (!confirmDelete) {
            return false;
        } else {
            return true;
        }
    }
</script>

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
                            <a href="index.php" class="mcf-crumb">Home&gt;</a>&nbsp;&nbsp;<a href="#" class="mcf-crumb">Admin Panel</a>
                        </p>
                    </div>
                    <div class="text-center h1-ls" title="Admin Panel">
                        <h1 class="header-font pb-4 px-3 px-md-0">Admin Panel
                        </h1>
                        <p class="h6"> Welcome <?= ucwords($_SESSION['name']) ?></p>
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
                            <a class="nav-link px-2 active" aria-current="page" href="_admin.php">Admin Panel<span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="orderInsert.php">New Order</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2" href="orderUpdate.php">Update Order</a>
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
                    <div class="p-3 text-bg-light hero-text-border">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <strong>Online Order Summary (Click to Display)</strong>
                                    </button>
                                </h3>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">

                                        <div class='row text-center'>
                                            <div class="col-sm-6 pt-2 pb-4">
                                                <a href="exportData.php" target='_blank' class="btn mcf-button">CSV Export All Data</a>
                                            </div>
                                        </div>


                                        <fieldset>
                                            <legend>Order Info</legend>
                                            <div class='row pb-3'>
                                                <div class="col-sm-4">
                                                    Total Orders: <?php echo getZeroPara(); ?>
                                                </div>
                                                <div class="col-sm-4">
                                                    Total Flowers Ordered: <?php echo getOnePara('quanflowers'); ?>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <br>

                                        <fieldset>
                                            <legend>Revenue Breakdown</legend>
                                            <div class='row pb-3'>
                                                <div class='col-sm-3'>
                                                    Total Amount Due: $<?php echo number_format(getOnePara('total'), 2); ?>
                                                </div>
                                                <div class='col-sm-3'>
                                                    Total Amount Paid: $<?php echo number_format(getOnePara('paid'), 2); ?>
                                                </div>
                                            </div>

                                            <div class='row pb-3'>
                                                <div class='col-sm-3'>
                                                    Cash: $<?php $sqlVal = getTwoParaSum('payment', 'cash');
                                                            echo (is_null($sqlVal)) ? 0 : number_format($sqlVal, 2); ?>

                                                </div>
                                                <div class="col-sm-3">
                                                    Check: $<?php $sqlVal = getTwoParaSum('payment', 'check');
                                                            echo (is_null($sqlVal)) ? 0 : number_format($sqlVal, 2); ?>
                                                </div>
                                                <div class='col-sm-3'>
                                                    Venmo: $<?php $sqlVal = getTwoParaSum('payment', 'venmo');
                                                            echo (is_null($sqlVal)) ? 0 : number_format($sqlVal, 2); ?>
                                                </div>
                                                <div class='col-sm-3'>
                                                    PayPal: $<?php $sqlVal = getTwoParaSum('payment', 'paypal');
                                                                echo (is_null($sqlVal)) ? 0 : number_format($sqlVal, 2); ?>
                                                </div>
                                            </div>

                                            <div class='row pb-3'>
                                                <div class='col-sm-3'>
                                                    # of Cash: <?php echo getTwoPara('payment', 'cash'); ?>
                                                </div>
                                                <div class="col-sm-3">
                                                    # of Check: <?php echo getTwoPara('payment', 'check'); ?>
                                                </div>
                                                <div class='col-sm-3'>
                                                    # of Venmo: <?php echo getTwoPara('payment', 'venmo'); ?>
                                                </div>
                                                <div class='col-sm-3'>
                                                    # of PayPal: <?php echo getTwoPara('payment', 'paypal'); ?>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <br>

                                        <fieldset>
                                            <legend>Activity Details</legend>
                                            <p>To Be Determined</p>
                                        </fieldset>

                                        <br>

                                        <fieldset>
                                            <legend>Customer Stats</legend>
                                            <div class='row pb-3'>
                                                <div class='col-sm-3'>
                                                    English: <?php echo getTwoPara('lang', 'en'); ?>
                                                </div>
                                                <div class='col-sm-3'>
                                                    Spanish: <?php echo getTwoPara('lang', 'es'); ?>
                                                </div>
                                                <div class='col-sm-3'>
                                                    Other Language: <?php echo getTwoPara('lang', 'other'); ?>
                                                </div>
                                            </div>
                                        </fieldset>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Part Two -->
        <div class="container shadow-wrap">
            <div class="row justify-content-center mb-5">
                <div class="col-xl-12 py-4">
                    <div class="p-3 text-bg-light hero-text-border">

                        <form method='POST' name='regStatus' id='regStatus'>
                            <div class="row">
                                <div class="col-sm-3 pt-3">
                                    <div class="input-group">
                                        <label for="regType" class="reg-form-label px-2">Order Status</label>
                                        <select class="form-select" name="regType">
                                            <option value="all" selected>All</option>
                                            <option value="incomplete">Incomplete</option>
                                            <option value="complete">Complete</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 pt-3">
                                    <input type="submit" value="search" name="filterForm" class="btn mcf-button" />
                                </div>

                                <?php if (!empty($statusMsg)) { ?>
                                    <div class="col-sm-3 mx-auto py-3">
                                        <p class="h5 text-center fw-bold"><?php echo $statusMsg; ?></p>
                                    </div>
                                <?php } ?>


                            </div>
                        </form>

                        <table class="table table-hover display nowrap" style="width:100%;" id="adminDisplay">
                            <caption>Admin Orders</caption>
                            <!--https://www.w3schools.com/bootstrap/bootstrap_tables.asp-->
                            <thead class='table-dark text-center'>
                                <tr>
                                    <th>Date</th>
                                    <th>First</th>
                                    <th>Last</th>
                                    <th>Email</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                    <th>Payment</th>
                                    <th>Due</th>
                                    <th>Paid</th>
                                    <th>Status</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip Code</th>
                                    <th># Flowers</th>
                                    <th>Language</th>
                                    <th>TOS</th>
                                    <th>TransID</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                if (isset($_POST['filterForm']) && ($_POST['regType'] != 'all')) {
                                    if ($_POST['regType'] == 'incomplete') {
                                        $orders = getOrderType("requisition", "incomplete");
                                    } else {
                                        $orders = getOrderType("requisition", "complete");
                                    }
                                } else {
                                    $orders = getOrderData("requisition", "desc");
                                }

                                displayOrderAdmin($orders);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <?php include_once 'footer.inc' ?>

        <!-- https://datatables.net/ -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

        <script>
            //https://datatables.net/reference/option
            new DataTable('#adminDisplay', {
                responsive: true,
                order: [
                    [0, 'desc']
                ]
            });
        </script>

</body>

</html>