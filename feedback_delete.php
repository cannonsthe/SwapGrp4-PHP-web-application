<?php
$con = mysqli_connect("localhost","root","","swaprj"); //connect to database
if (!$con){
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
$query= $con->prepare("DELETE FROM feedback WHERE feedbackid=?");
$cpfid = $_REQUEST['feedbackid'];

$query->bind_param('s', $feedbackid); //bind the parameters
if ($query->execute()){
 echo "Query executed.";
}else{
 echo "Error executing query.";
}
?>