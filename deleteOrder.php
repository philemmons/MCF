<?php
ob_start();
session_start();
/* Update SQL query with named parameters that prevent SQL injection */

if (!isset($_SESSION["status"]) || ($_SESSION['status'] != getenv('LOGIN_STATUS'))) {  //Check whether the admin has logged in
    header("Location: _login.php");
}

include_once 'php/dbConnection.php';

$dbConn = getDBConnection();

$nPara[':dRegId'] = $_GET['id'];
$sql = "DELETE FROM requisition
            WHERE id = :dRegId ";
//echo $sql;
$stmt = $dbConn->prepare($sql);
$stmt->execute($nPara);

header("Location: _admin.php");
exit();
