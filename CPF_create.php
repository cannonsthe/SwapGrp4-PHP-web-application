<?php
$con = mysqli_connect("localhost","root","","swaprj"); //connect to database
if (!$con){
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$fname = $_REQUEST['fname'];
$datepaid = $_REQUEST['datepaid'];
$amount = $_REQUEST['amount'];
$month = $_REQUEST['month'];
$cpfid = $_REQUEST['cpfid']
$method = $_SERVER['REQUEST_METHOD'];

$query="INSERT INTO swaprj.cpf (fname,datepaid,month,amount)" .
     "VALUES ('$fname', '$datepaid', '$month', '$amount');";
     $result=mysqli_query($con,$query);
     if(!$result){
        echo ("INSERT Failed<br>");
        echo mysqli_error($con). "<br>";
     }
     else{
         echo "INSERT OK<br>";
     }
?>