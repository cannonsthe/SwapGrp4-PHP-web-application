<?php
$con = mysqli_connect("localhost","root","","swaprj"); //connect to database
if (!$con){
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$query= $con->prepare("UPDATE cpf SET cpfbalance=?,cpfoa=?,cpfsa=? WHERE userid=?");
$cpfbalance = $_REQUEST['cpfbalance'];
$cpfoa = $_REQUEST['cpfoa'];
$cpfsa = $_REQUEST['cpfsa'];
$userid = $_REQUEST['userid']

$query->bind_param('ssss', $cpfbalance, $cpfoa, $cpfsa, $userid); //bind the parameters
if ($query->execute()){
 echo "Query executed.";
}else{
 echo "Error executing query.";
}
?>