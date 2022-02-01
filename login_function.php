<?php
include('connect.php');
$invalid = header('Refresh:0; url=login.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['user'];
    $fpassword = $_POST['password'];
    $pass = validatelogin($fname, $fpassword);
    if ($pass == true) {
        $query = $con->prepare("select password from user_information WHERE fname=?");
        $query->bind_param("s", $fname);
        $query->bind_result($password);
        $query->execute();
        $query->fetch();
        if ($_POST['password'] == $password) {
            header('Location: Employee.php');
        } else {
            echo $invalid;
        }
    }
    else {
        echo $invalid;
    }
}
function validatelogin($fname, $fpassword)
{
    if (!empty($fname && $fpassword) && preg_match('/[\'^£$%&*()}{@#~?><>,.|=_+¬-]/', $fname) == false) {
        $pass = true;
    } else {
        $pass = false;
    }
    return $pass;
}
