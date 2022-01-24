<?php
$dbname="swaprj";
$dbhost="localhost";
$dbuser="root";
$dbpwd="";
$conn = new mysqli($dbhost,$dbuser,$dbpwd,$dbname);
if($conn->errno){
echo "Unable to connect";
}else
    	echo "";


$con = new mysqli($dbhost,$dbuser,$dbpwd,$dbname);
if($con->errno){
echo "Unable to connect";
}
?>