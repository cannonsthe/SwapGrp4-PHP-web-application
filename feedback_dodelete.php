<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Feedback</title>
    <link rel="stylesheet" href="FeedbackPage.css">
    <link rel="stylesheet" href="HomePage.css">
</head>
<body>
    <?php
        include 'session.php';
    ?>
    <div class="navbar">
       <a href="#" class="logo">FRecords</a>
       <div class="sections">
           <a href="employee.php" >Employee Information</a>
           <a href="Salary.php">Employee Salary</a>
           <a href="Expenses.php" > General Expenses</a>
           <a href="CPF.php" >CPF Contributions</a>
           <a href="feedback.php" class="active">Feedback</a>
           <a href="logout.php">Logout</a>
       </div>
    </div>

    <?php

        include 'connect.php';

    $feedbackid=$_POST["feedbackid"];

$stmt = $conn->prepare("DELETE FROM swaprj.feedback WHERE feedbackid=?");
$stmt->bind_param("i", $feedbackid);
$res = $stmt->execute();
if($res){
    echo "Delete successfully";
}else
    echo "Unable to delete";
?>

<br>
<br>
<a href="feedback.php">Return to Feedback</a>
<br>


</body>
</html>