<?php
$con = mysqli_connect("localhost", "root", "", "swaprj"); //connect to database
if (!$con) {
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$year = $_REQUEST['year'];
$type = $_REQUEST['type'];
$amount = $_REQUEST['amount'];
$expenseid = $_REQUEST['expenseid'];
$method = $_SERVER['REQUEST_METHOD'];


if ($_POST) {
    $query = $con->prepare("INSERT INTO `expenses` (`year`,`type`,`amount`) VALUES
    (?,?,?)");

    $query->bind_param('sss', $year, $type, $amount); //bind the parameters
    if ($query->execute()) { //execute query
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Entry Inserted!');
        window.location.href='/Expenses.php';
        </script>");
    } else {
        echo "Error executing query.";
    }
}
    $query->close();
