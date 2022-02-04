<?php
include('connect.php');
$invalid = header('Refresh:0; url=index.php');
if (isset($_SESSION['user'])) {
    header("Location: Expenses.php");
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_POST['user'];
        $fpassword = $_POST['password'];
        //$hashAlgo = "sha256";
        //$hashValue = hash($hashAlgo, $fpassword);
       $pass = validatelogin($fname, $fpassword);
        if ($pass == true) {
            $query = $con->prepare("select password from user_information WHERE fname=?");
            $query->bind_param("s", $fname);
            $query->bind_result($password);
            $query->execute();
            $query->fetch();
            if ($_POST['password'] == $password) {
                session_start();
                $_SESSION['user'] = $fname;
                header('Location: Expenses.php');
            } else {
                echo $invalid;
            }
        } else {
            echo $invalid;
        }
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

