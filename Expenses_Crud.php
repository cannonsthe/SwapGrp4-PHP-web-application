<?php
$con = mysqli_connect("localhost", "root", "", "swaprj"); //connect to database
if (!$con) {
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
include("connect.php");

$at = $_REQUEST['actiontype'];
echo $at;
$year = $_REQUEST['year'];
$type = $_REQUEST['type'];
$amount = $_REQUEST['amount'];
$expenseid = $_REQUEST['expenseid'];
$refresh = "<script LANGUAGE='JavaScript'>window.alert('Succesfully Updated');window.location.href='/Expenses.php';</script> ";

if ($at == "add") {
    $query = $con->prepare("INSERT INTO `expenses` (`year`,`type`,`amount`) VALUES
    (?,?,?)");
    $query->bind_param('sss', $year, $type, $amount); //bind the parameters
    if ($query->execute()) { //execute query
        echo ($refresh);
    } else {
        echo "Error executing query.";
    }
    $query->close();
}

if ($at == "update") {
    $query = $con->prepare("UPDATE expenses SET year=?, type=?, amount=? WHERE expenseid=?");
    $query->bind_param('sssi', $year, $type, $amount, $expenseid); //bind the parameters
    if ($query->execute()) {
        echo ($refresh);
    } else {
        echo "Error executing query.";
    }
    $query->close();
}

if ($at == "delete") {
    $query = $con->prepare("DELETE FROM expenses WHERE expenseid=?;");
    $query2 = $con->prepare("ALTER TABLE expenses AUTO_INCREMENT = 1");
    $expenseid = $_REQUEST['expenseid'];
    $query->bind_param('i', $expenseid); //bind the parameters
    if ($query->execute()) {
        $query2->execute();
        echo ($refresh);
    } else {
        echo "Error executing query.";
    }
    $query->close();
}
