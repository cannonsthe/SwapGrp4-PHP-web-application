<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$con = mysqli_connect("localhost", "root", "", "swaprj"); //connect to database
if (!$con) {
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
$query = $con->prepare("UPDATE expenses SET year=?, type=?, amount=? WHERE expenseid=?");
$year = $_REQUEST['year'];
$type = $_REQUEST['type'];
$amount = $_REQUEST['amount'];
$expenseid = $_REQUEST['expenseid'];

$query->bind_param('sssi', $year, $type, $amount, $expenseid); //bind the parameters
if ($query->execute()) {
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='/Expenses.php';
    </script>");
} else {
    echo "Error executing query.";
}
$query->close();
?>