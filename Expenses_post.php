<?php
$con = mysqli_connect("localhost","root","","tpshop"); //connect to database
if (!$con){
die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$query= $con->prepare("INSERT INTO `expenses` (`type`,`amount`) VALUES
(?,?)");

$query->bind_param('ss', $type,$amount); //bind the parameters
if ($query->execute()){ //execute query
 echo "Query executed.";
}else{
 echo "Error executing query.";
}
?>