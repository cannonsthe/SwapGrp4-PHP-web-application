<?php
$con = mysqli_connect("localhost","root","","swaprj"); //connect to database
if (!$con){
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$fname = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$feedback = $_REQUEST['feedback'];
$feedbackid = $_REQUEST['feedbackid']
$method = $_SERVER['REQUEST_METHOD'];

$query="INSERT INTO swaprj.cpf (fname,email,subject,feedback)" .
     "VALUES ('$fname', '$email', '$subject', '$feedback');";
     $result=mysqli_query($con,$query);
     if(!$result){
        echo ("INSERT Failed<br>");
        echo mysqli_error($con). "<br>";
     }
     else{
         echo "INSERT OK<br>";
     }
?>