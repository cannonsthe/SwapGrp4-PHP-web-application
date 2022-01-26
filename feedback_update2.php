<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Feedback</title>
    <link rel="stylesheet" href="HomePage.css">
    <link rel="stylesheet" href="FeedbackPage.css">

</head>

<body>
    <div class="navbar">
       <a href="#" class="logo">FRecords</a>
       <div class="sections">
       <a href="Employee.php">Employee Information</a>
           <a href="Salary.php">Employee Salary</a>
           <a href="Expenses.php" > General Expenses</a>
           <a href="CPF.php" >CPF Contributions</a>
           <a href="feedback.php" class="active">Feedback</a>
           <a href="index.php">Logout</a>
       </div>
    </div>

    <?php

        include 'connect.php';

        
        $feedbackid=$_POST['feedbackid'];
        $fname=$_POST['fname'];
        $subject=$_POST['subject'];
        $email=$_POST['email'];
        $feedback=$_POST['feedback'];
        $department=$_POST['department'];
        

        $stmt = $conn->prepare("UPDATE swaprj.feedback SET fname=?, subject=?, email=?, feedback=?, department=? WHERE feedbackid=?");
        $stmt->bind_param("sssssi", $fname, $subject, $email, $feedback, $department, $feedbackid);
        $res = $stmt->execute();
        if($res){
            echo "Update successfully";
        }else
            echo "Unable to update";
    ?>

    <br>
    <br>
     <a href="feedback.php">Return to Feedbacks</a>
     <br>
</body>
</html>