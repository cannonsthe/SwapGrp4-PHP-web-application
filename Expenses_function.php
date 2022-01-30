<?php
include('connect.php');
$refresh = "<script LANGUAGE='JavaScript'>window.alert('Succesfully Executed');window.location.href='/Expenses.php';</script> ";
function validation($at)
{
    $errorarray = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($at == 'add' || $at == 'update') {
            //Year check. No special character allowed, no more or less than 4 digits and must be solely numbers.
            $year = $_POST['year'];
            if (!empty($year) && preg_match('/[\'^£$%&*()}{@#~?><>,.|=_+¬-]/', $year) == false && is_numeric($year) && strlen($year) == 4) {
            } else {
                array_push($errorarray, "Enter a valid year! \r\n");
            }
            //Type of expense check (should be alphanumeric) and no more than 16 characters
            $type = htmlspecialchars($_POST['type']);
            if (ctype_alnum($type) && strlen($type) <= 16) {
            } else {
                array_push($errorarray, "Type of expense should be alphanumeric and no more than 16 characters!");
            }
            //Amount check, should be only numbers
            $amount = htmlspecialchars($_POST['amount']);
            if (is_numeric($amount)) {
                $amount = round(floatval($_POST['amount']), 2);
                if (is_float($amount) && $amount >= 1) {
                }
            } else {
                array_push($errorarray, "Invalid amount!");
            }
            if ($at == 'update') {
                if (is_numeric($_POST['expenseid']) && $_POST['expenseid'] != 0) {
                    $float = htmlspecialchars($_POST['expenseid']);
                    if (intval($float) == floatval($float)) {
                    } else {
                        array_push($errorarray, "Enter a valid ID!");
                    }
                } else {
                    array_push($errorarray, "Enter a valid ID!");
                }
            }
        } elseif ($at == 'delete') {
            if (is_numeric($_POST['expenseid'])) {
                $float = htmlspecialchars($_POST['expenseid']);
                if (intval($float) == floatval($float)) {
                } else {
                    array_push($errorarray, "Enter a valid ID!");
                }
            } else {
                array_push($errorarray, "Enter a valid ID!");
            }
        }
    }
    return $errorarray;
}

function addexpense($year, $type, $amount, $con, $refresh, $errorarray)
{
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


function updateexpense($year, $type, $amount, $con, $refresh, $expenseid, $errorarray)
{
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

function deleteexpense($con, $refresh, $expenseid, $errorarray)
{
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
        $query2->execute();
        echo ($refresh);
    }
    $query->close();
}
