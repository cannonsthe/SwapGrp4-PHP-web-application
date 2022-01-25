<?php
error_reporting(1);
ini_set ('display_errors', 1);
include('connect.php');
include('Expenses_function.php');
$at = $_POST['actiontype'];
echo $at;
$year = $_POST['year'];
$type = $_POST['type'];
$amount = round(floatval($_POST['amount']), 2);
$expenseid = $_POST['expenseid'];
$atalert = "<script LANGUAGE='JavaScript'>window.alert('Do fill up the required sections');window.location.href='/Expenses.php';</script> ";
$refresh = "<script LANGUAGE='JavaScript'>window.alert('Succesfully Executed');window.location.href='/Expenses.php';</script> ";
if (isset($at)) {
    if ($at == "add") {
        $query = $con->prepare("INSERT INTO `expenses` (`year`,`type`,`amount`) VALUES
        (?,?,?)");
        $query->bind_param('sss', $year, $type, $amount); //bind the parameters
        $errors = validation($at);
        if ($errors == 0) {
            $query->execute(); //execute query
            echo ($refresh);
        }
        $query->close();
    }
    
    if ($at == "update") {
        $query = $con->prepare("UPDATE expenses SET year=?, type=?, amount=? WHERE expenseid=?");
        $query->bind_param('sssi', $year, $type, $amount, $expenseid); //bind the parameters
        $errors = validation($at);
        if ($errors == 0) {
            $query->execute();
            echo ($refresh);
        }
        $query->close();
    }
    
    if ($at == "delete") {
        $query = $con->prepare("DELETE FROM expenses WHERE expenseid=?;");
        $query2 = $con->prepare("ALTER TABLE expenses AUTO_INCREMENT = 1");
        $expenseid = $_REQUEST['expenseid'];
        $query->bind_param('i', $expenseid); //bind the parameters
        $errors = validation($at);
        if ($errors == 0) {
            $query->execute();
            $query2->execute();
            echo ($refresh);
        }
        $query->close();
    }
}
else {
    echo $atalert;
}

