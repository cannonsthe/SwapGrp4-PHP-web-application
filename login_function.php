<?php
include('connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['user'];
    $query = $con->prepare("select password from user_information WHERE fname=?");
    $query->bind_param("s",$fname);$query->bind_result($password);
    $query->execute();
    $query->fetch();
    if ($_POST['password'] == $password){
        header('Location: Employee.php');
    }
    else {
        echo "You have either entered an invalid user or password";
    }
} else {
    echo "nice";
}