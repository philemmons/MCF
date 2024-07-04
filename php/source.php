<?php

include_once 'dbConnection.php';

$dbConn = getDBConnection();

/**
 * @input: register form fields
 * @output variables assigned are converted to HTML predefined entities, including quotes, and lowercase
 */
function orderFormData($total, $lang)
{
     global $firstName, $lastName, $email, $phone, $address, $city, $state, $zc, $qf, $cBox, $pm, $bl, $total, $lang;


     $firstName = isset($_POST['firstName']) ? strtolower(htmlspecialchars($_POST['firstName'], ENT_QUOTES)) : '';
     $lastName = isset($_POST['lastName']) ? strtolower(htmlspecialchars($_POST['lastName'], ENT_QUOTES)) : '';
     $email = isset($_POST['myEmail']) ? strtolower(htmlspecialchars($_POST['myEmail'], ENT_QUOTES)) : '';
     $phone = isset($_POST['myPhone']) ? strtolower(htmlspecialchars($_POST['myPhone'], ENT_QUOTES)) : '';
     $address = isset($_POST['myAddress']) ? strtolower(htmlspecialchars($_POST['myAddress'], ENT_QUOTES)) : '';
     $city = isset($_POST['myCity']) ? strtolower(htmlspecialchars($_POST['myCity'], ENT_QUOTES)) : '';
     $state = isset($_POST['myState']) ? strtolower(htmlspecialchars($_POST['myState'], ENT_QUOTES)) : '';
     $zc = isset($_POST['myZipcode']) ? strtolower(htmlspecialchars($_POST['myZipcode'], ENT_QUOTES)) : '';
     $qf = isset($_POST['quanFlower']) ? strtolower(htmlspecialchars($_POST['quanFlower'], ENT_QUOTES)) : '';
     $cBox = isset($_POST['paymentCheckBox']) ? strtolower(htmlspecialchars($_POST['paymentCheckBox'], ENT_QUOTES)) : '';
     $pm = isset($_POST['paymentMethod']) ? strtolower(htmlspecialchars($_POST['paymentMethod'], ENT_QUOTES)) : '';
     $bl = isset($_POST['buyerLead']) ? strtolower(htmlspecialchars($_POST['buyerLead'], ENT_QUOTES)) : '';

     saveData($total, $lang);
}

//https://math.stackexchange.com/questions/424911/find-closed-form-for-1-2-2-3-4-4-5-6-6-7-8-8-9-10-10-ldots
// buy 2 get one free formula
function getAmount($item, $cost)
{
     if (!is_double($item))
          $item = doubleval($item);

     $amount = (floor(($item + 1) / 3.0) +  floor(($item + 2) / 3.0)) * ($cost * 0.90);
     return $amount;
}



/*
*@input: PDO sql string to be processed with or without parameterized variable(s)
*@output: table from the sql query
*/
function preExeFet($sql)
{
     global $dbConn, $nPara;

     $stmt = $dbConn->prepare($sql);
     $stmt->execute($nPara);
     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
     return $records;
}

function preExeFetNOPARA($sql)
{
     global $dbConn;

     $stmt = $dbConn->prepare($sql);
     $stmt->execute();
     $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
     return $records;
}



/*
*@input: Name of the database table 
*@output: all contents of device table for the user in ascending numerical order
*/
function getInfo($table)
{
     $sql = "SELECT * FROM " . $table . " ORDER BY id ASC";
     return preExeFetNOPARA($sql);
}

function getUserInfo($email)
{
     global $dbConn, $nPara;

     $nPara[':dEmail'] = $email;
     $sql = "SELECT * FROM requisition WHERE email like :dEmail ";
     $stmt = $dbConn->prepare($sql);
     $stmt->execute($nPara);
     $record = $stmt->fetch(PDO::FETCH_ASSOC);
     return $record;
}

/*
*@input: Name of the database table - requisition
*@output: all contents of requisition table for the user by ascending date with TBA values last
*/
function getOrderData($table, $upDown)
{
     //$sql = "SELECT *, DATE_FORMAT(datetime, '%m-%d-%y') AS result FROM " . $table . " ORDER BY id DESC";
     $sql = "SELECT *, DATE(datetime) AS result FROM " . $table . " ORDER BY result IS NULL , result " . $upDown;
     return preExeFetNOPARA($sql);
}

/*
*@input: Name of the database table - requisition; Name of the requisition status - yes/no
*@output: all contents of requisition table for the user based on requisition status
*/
function getOrderType($table, $regType)
{
     global $nPara;
     $nPara[':regType'] = $regType;

     $sql = "SELECT *, DATE(datetime) AS result FROM " . $table . " WHERE rstatus LIKE :regType";
     //echo $sql; die();
     return preExeFet($sql);
}

function saveData($total, $lang)
{
     global $firstName, $lastName, $email, $phone, $address, $city, $state, $zc, $qf, $cBox, $pm, $bl, $total, $lang;

     global $dbConn, $nPara;

     if (isset($_POST['submit'])) {

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
                    buyerlead,
                    total,
                    lang
                ) VALUES (
                    :firstName, :lastName, :email, :phone, :address, :city, :state, :zc, :qf, :cBox, :pm, :bl, $total, :lang
                )";

          $nPara[':firstName'] = $firstName;
          $nPara[':lastName'] = $lastName;
          $nPara[':email'] = $email;
          $nPara[':phone'] = $phone;
          $nPara[':address'] = $address;
          $nPara[':city'] = $city;
          $nPara[':state'] = $state;
          $nPara[':zc'] = $zc;
          $nPara[':qf'] = $qf;
          $nPara[':cBox'] = $cBox;
          $nPara[':pm'] = $pm;
          $nPara[':bl'] = $bl;
          $nPara[':lang'] = $lang;

          $stmt = $dbConn->prepare($sql);
          $stmt->execute($nPara);
          //clear the value - prevent multiple insertions
          $nPara = array();

          sleep(2);
     } //eof if
}

//login.php
/*
*@input: login process accesssed by login.php with user input
*@output: successful login  directs user to index.php
*Future work - https://stackoverflow.com/questions/20764031/php-salt-and-hash-sha256-for-login-password
*/
function goMain()
{
     global $dbConn, $nPara;

     $userForm = htmlspecialchars($_POST['formUN'], ENT_QUOTES);
     $pwForm = hash('sha256', ($_POST['formPW'] . getenv('PW_SALT')));

     //Prevents SQL injection by using a named parameter.
     $nPara[':username'] = $userForm;
     $nPara[':password'] = $pwForm;

     $sql = "SELECT * FROM admin WHERE userName = :username AND password = :password";

     $statement = $dbConn->prepare($sql);
     $statement->execute($nPara);
     $record = $statement->fetch(PDO::FETCH_ASSOC);

     if (empty($record)) { //wrong credentials
          echo "<form method='POST' action='_login.php'>";
          echo "<br><span style='color:red'><h4>Wrong username or password.</h4></span>";
          echo "</form>";
     } else {
          $_SESSION["name"] = $record['firstName'] . " " . $record['lastName'];
          $_SESSION["username"]  = $record['userName'];
          $_SESSION["status"] = getenv('LOGIN_STATUS');
          //echo $_SESSION["status"];
          header("Location: _admin.php"); //redirect to login page
     }
}

//regInsert.php and regUpdate.php
function getOrderInfo($regID)
{
     global $dbConn, $nPara;

     $nPara[':dRegId'] = $regID;
     $sql = "SELECT * FROM requisition WHERE id = :dRegId ";
     $stmt = $dbConn->prepare($sql);
     $stmt->execute($nPara);
     $record = $stmt->fetch(PDO::FETCH_ASSOC);
     return $record;
}


function formatPhone($phoneNumber)
{
     $phoneNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

     if (strlen($phoneNumber) > 10) {
          $countryCode = substr($phoneNumber, 0, strlen($phoneNumber) - 10);
          $areaCode = substr($phoneNumber, -10, 3);
          $nextThree = substr($phoneNumber, -7, 3);
          $lastFour = substr($phoneNumber, -4, 4);

          $phoneNumber = '+' . $countryCode . ' (' . $areaCode . ')' . $nextThree . '-' . $lastFour;
     } else if (strlen($phoneNumber) == 10) {
          $areaCode = substr($phoneNumber, 0, 3);
          $nextThree = substr($phoneNumber, 3, 3);
          $lastFour = substr($phoneNumber, 6, 4);

          $phoneNumber = '(' . $areaCode . ')' . $nextThree . '-' . $lastFour;
     } else if (strlen($phoneNumber) == 7) {
          $nextThree = substr($phoneNumber, 0, 3);
          $lastFour = substr($phoneNumber, 3, 4);

          $phoneNumber = $nextThree . '-' . $lastFour;
     }

     return $phoneNumber;
}
