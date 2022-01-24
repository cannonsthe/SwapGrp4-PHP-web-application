<?php
function validation($at)
{   
    $errors = 0;
    if ($at == 'add' || $at == 'update'){
        //Year check
        if (is_numeric($_POST['year']) == true){
        }
        else{
            echo "<script LANGUAGE='JavaScript'>window.alert('There should only be numbers in the input!');window.location.href='/Expenses.php';</script>";
            $errors++;
        }
    }
    return $errors;
}
  