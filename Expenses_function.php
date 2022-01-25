<?php
function validation($at)
{
    $ealert = "<script LANGUAGE='JavaScript'>window.alert('Invalid input!');window.location.href='/Expenses.php';</script>";
    $errors = 0;
    if ($at == 'add' || $at == 'update') {
        //Year check. No special character allowed, no more or less than 4 digits and must be solely numbers.
        $year = $_POST['year'];
        if (is_numeric($year) && strlen($year) == 4 && preg_match('/[\'^£$%&*()}{@#~?><>,.|=_+¬-]/', $year) == false && $year >= 2000) {
        } else {
            echo $ealert;
            $errors++;
        }
        //Type of expense check (should be alphanumeric) and no more than 16 characters
        $type = $_POST['type'];
        if (ctype_alnum($type) && strlen($type) <= 16) {
        } else {
            echo $ealert;
            $errors++;
        }
        //Amount check, should be only numbers
        $amount = $_POST['amount'];
        if (is_numeric($amount)) {
            $amount = round(floatval($_POST['amount']), 2);
            if (is_float($amount) && $amount >= 1) {
            }
        } else {
            echo $ealert;
            $errors++;
        }
    } elseif ($at == 'delete') {
        if (is_numeric($_POST['expenseid'])) {
            $float = $_POST['expenseid'];
            if (intval($float) == floatval($float)) {
            } else {
                echo $ealert;
                $errors++;
            }
        } else {
            echo $ealert;
            $errors++;
        }
    }
    return $errors;
}

function simplecho()
{
}
