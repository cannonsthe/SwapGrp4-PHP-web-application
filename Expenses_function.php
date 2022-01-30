<?php
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
