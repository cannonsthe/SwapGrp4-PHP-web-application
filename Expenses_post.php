<?php
$con = mysqli_connect("localhost", "root", "", "swaprj"); //connect to database
if (!$con) {
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$date = $_REQUEST['year'];
$type = $_REQUEST['type'];
$amount = $_REQUEST['amount'];

$query = $con->prepare("INSERT INTO `expenses` (`date`,`type`,`amount`) VALUES
(?,?,?)");

$query->bind_param('sss',$date, $type, $amount); //bind the parameters
if ($query->execute()) { //execute query
    echo '<script>alert("Entry Inserted!")</script>';
} else {
    echo "Error executing query.";
}
