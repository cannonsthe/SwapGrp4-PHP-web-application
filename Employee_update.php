<?php
$con = mysqli_connect("localhost","root","","swaprj"); //connect to database
if (!$con){
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$query= $con->prepare("UPDATE user SET fname=?,password=?,email=?,department=?,position=?,bankname=?,accountnumber=? WHERE userid=?");
$fname = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$department = $_REQUEST['department'];
$position = $_REQUEST['position'];
$password = $_REQUEST['password'];
$bankname = $_REQUEST['bankname'];
$accountnumber = $_REQUEST['accountnumber'];
$userid = $_REQUEST['userid']

$query->bind_param('sssssss', $fname, $password, $email, $department, $position, $bankname, $accountnumber, $userid); //bind the parameters
if ($query->execute()){
 echo "Query executed.";
}else{
 echo "Error executing query.";
}
?>