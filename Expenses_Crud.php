<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRecords</title>
    <link rel="stylesheet" href="HomePage.css">
    <link rel="stylesheet" href="Expenses.css">
</head>
<?php
include('connect.php');
include('Expenses_function.php');
$at = $_POST['actiontype'];
$year = $_POST['year'];
$type = $_POST['type'];
$amount = round(floatval($_POST['amount']), 2);
$expenseid = $_POST['expenseid'];
$refresh = "<script LANGUAGE='JavaScript'>window.alert('Succesfully Executed');window.location.href='/Expenses.php';</script> ";
$errorarray = validation($at);

if (isset($at)) {

    if ($at == "add") {
        $query = $con->prepare("INSERT INTO `expenses` (`year`,`type`,`amount`) VALUES
        (?,?,?)");
        $query->bind_param('sss', $year, $type, $amount); //bind the parameters
        if (!empty($errorarray)) {
            foreach ($errorarray as $array) {
                echo $array;
                echo "<br>";
            }
        } else {
            $query->execute(); //execute query
            echo ($refresh);
        }
        $query->close();
    }

    if ($at == "update") {
        $query = $con->prepare("UPDATE expenses SET year=?, type=?, amount=? WHERE expenseid=?");
        $query->bind_param('sssi', $year, $type, $amount, $expenseid); //bind the parameters
        if (!empty($errorarray)) {
            foreach ($errorarray as $array) {
                echo $array;
                echo "<br>";
            }
        } else {
            $query->execute(); //execute query
            echo ($refresh);
        }
        $query->close();
    }

    if ($at == "delete") {
        $query = $con->prepare("DELETE FROM expenses WHERE expenseid=?;");
        $query2 = $con->prepare("ALTER TABLE expenses AUTO_INCREMENT = 1");
        $query->bind_param('i', $expenseid); //bind the parameters
        if (!empty($errorarray)) {
            foreach ($errorarray as $array) {
                echo $array;
                echo "<br>";
            }
        } else {
            $expenseid = $_REQUEST['expenseid'];
            $query->execute(); //execute query
            echo ($refresh);
        }
        $query->close();
    }
    echo "<br><a href='Expenses.php'><u>Go back!</u></a>";
} else {
    echo "<script LANGUAGE='JavaScript'>window.alert('Select an action type!');window.location.href='/Expenses.php';</script> ";
}
