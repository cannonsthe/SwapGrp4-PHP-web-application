<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="HomePage.css">
    <link rel="stylesheet" href="FeedbackPage.css">

</head>

<body>
    <?php
        include 'session.php';
    ?>
    <div class="navbar">
       <a href="#" class="logo">FRecords</a>
       <div class="sections">
       <a href="Employee.php">Employee Information</a>
           <a href="Salary.php">Employee Salary</a>
           <a href="Expenses.php" > General Expenses</a>
           <a href="CPF.php" >CPF Contributions</a>
           <a href="feedback.php" class="active">Feedback</a>
           <a href="logout.php">Logout</a>
       </div>
    </div>
    <br><br>
    <div class="container2">
    <form style="text-align:center;margin-top:5px;margin-bottom:5px;">
            <a href="feedback_create.php">
            <input class="button" type="button" value="Add Feedback" /></a>
        </form>

<?php

include 'connect.php';
$stmt = $conn->prepare("SELECT feedbackid,fname,subject,email,feedback,department FROM swaprj.feedback");
$res = $stmt->execute();
$stmt->bind_result($feedbackid,$fname,$subject,$email, $feedback, $department);
$stmt->store_result();
//echo "<table border='1'>";
//echo "<tr><td>"."Product ID"."</td><td>"."Product Name"."</td><td>"."Stock Amount"."</td><td>" ."Seller Contact"."</td><td>" ."Created Data". "</td></tr>";
while($stmt->fetch()){
    echo "<table class='borders' style='display:flex;'><br>";
    echo "<tr><td class='data2'>"."Feedback ID"."</td><td class='data'>".$feedbackid."</td></tr><tr><td class='data2'>"."Employee Name"."</td><td class='data'>".$fname."</td></tr><tr><td class='data2'>"."Subject"."</td><td class='data'>".$subject."</td></tr><tr><td class='data2'>"."Email"."</td><td class='data'>".$email."</td></tr><tr><td class='data2'>"."Feedback"."</td><td class='data'>".$feedback."</td></tr><tr><td class='data2'>"."Department"."</td><td class='data'>".$department."</td></tr>";
    echo "</table>";
    echo "<div style='text-align:right;margin-top:5px;margin-bottom:-10px;'>
    <a href='feedback_update.php?feedbackID=" . $feedbackid . "'>
    <input class='button' type='button' value='Edit Feedback' /></a>
    <a href='feedback_delete.php?feedbackID=" . $feedbackid . "'>
    <input class='button' type='button' value='Delete feedback' /></a></div>";
//echo "<tr><td>".$userid."</td><td>".$feedbackid."</td><td>".$fname."</td><td>" .$subject."</td><td>" .$email."</td><td>" .$feedback."</td><td>" .$department. "</td></tr>";
    }

?>

</div>
</body>
</html>