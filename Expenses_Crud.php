<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRecords</title>
    <link rel="stylesheet" href="HomePage.css">
    <link rel="stylesheet" href="Expenses.css">
</head>
<?php
session_start();
error_reporting(0);
ini_set('display_errors', 0);
include('connect.php');include('Expenses_function.php');
$at = $_POST['actiontype'];$year = $_POST['year'];$type = $_POST['type'];$amount = round(floatval($_POST['amount']), 2);$expenseid = $_POST['expenseid'];
$refresh = "<script LANGUAGE='JavaScript'>window.alert('Succesfully Executed');window.location.href='/Expenses.php';</script> ";
$errorarray = validation($at);
if (!isset($_SESSION['token']))
{
 $_SESSION['token'] = md5(uniqid(rand(), TRUE));
}
if ($_POST['token'] === $_SESSION['token']){
    $token_age = time() - $_SESSION['token_time'];
    if (isset($at)) {
        if ($at == "add") {
            addexpense($year, $type, $amount, $con, $refresh, $errorarray);
        }
    
        if ($at == "update") {
            updateexpense($year, $type, $amount, $con, $refresh, $expenseid, $errorarray);
        }
    
        if ($at == "delete") {
            deleteexpense($con, $refresh, $expenseid, $errorarray);
        }
        echo "<br><a href='Expenses.php'><u>Go back!</u></a>";
    } else {
        echo "<script LANGUAGE='JavaScript'>window.alert('Select an action type!');window.location.href='/Expenses.php';</script> ";
    }
    
}

