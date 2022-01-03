<?php
$con = mysqli_connect("localhost","root","","swaprj"); //connect to database
if (!$con){
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$fname = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$department = $_REQUEST['department'];
$dateregistered = $_REQUEST['dateregistered'];
$position = $_REQUEST['position'];
$password = $_REQUEST['password'];
$bankname = $_REQUEST['bankname'];
$accountnumber = $_REQUEST['accountnumber'];
$cpfoa = $_REQUEST['cpfoa'];
$cpfsa = $_REQUEST['cpfsa'];
$cpfbalance = $_REQUEST['cpfbalance'];
$method = $_SERVER['REQUEST_METHOD'];

$query="INSERT INTO swaprj.cpf (fname,email,department,dateregistered,position,password,bankname,accountnumber,cpfoa,cpfsa,cpfbalance)" .
     "VALUES ('$fname', '$email', '$department', '$dateregistered', '$position', '$password', '$bankname', '$accountnumber', '$cpfoa', '$cpfsa', '$cpfbalance');";
     $result=mysqli_query($con,$query);
     if(!$result){
        echo ("INSERT Failed<br>");
        echo mysqli_error($con). "<br>";
     }
     else{
         echo "INSERT OK<br>";
     }
?>