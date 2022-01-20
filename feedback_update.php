<?php
$con = mysqli_connect("localhost","root","","swaprj"); //connect to database
if (!$con){
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$query= $con->prepare("UPDATE feedback SET feedback=?,email=?,subject=? WHERE userid=?");
$feedback = $_REQUEST['feedback'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$userid = $_REQUEST['userid']

$stmt->bind_param('sssi', $feedback, $email, $subject, $userid); //bind the parameters
if ($stmt->execute()){
 echo "Query executed.";
}else{
 echo "Error executing query.";
}
?>