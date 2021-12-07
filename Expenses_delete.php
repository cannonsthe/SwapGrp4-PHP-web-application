<?php
$con = mysqli_connect("localhost", "root", "", "swaprj"); //connect to database
if (!$con) {
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}
$query = $con->prepare("DELETE FROM expenses WHERE expenseid=?;");
$query2 = $con->prepare("ALTER TABLE expenses AUTO_INCREMENT = 1");
$expenseid = $_REQUEST['expenseid'];

$query->bind_param('i', $expenseid); //bind the parameters
if ($query->execute()) {
    $query2->execute();
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted');
    window.location.href='/Expenses.php';
    </script>");
} else {
    echo "Error executing query.";
}
$query->close();
?>