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

    <strong><p style="font-size:40px;margin-left:33%;">Delete Feedback</p><strong>
    
    <?php

        include 'connect.php';

    
        $query="SELECT feedbackid FROM swaprj.feedback WHERE feedbackid=" . $_GET['feedbackID'] ; 
        $result=mysqli_query($conn, $query);

        $nrows=mysqli_num_rows($result); 
        if ($nrows>0) {                    
            $row=mysqli_fetch_assoc($result);
            $feedbackid=$row['feedbackid'];
            
           
        }
        else{
           echo "There are no records.<br>";
        }

        echo "Are you going to delete this feedback? ".$feedbackid;
        echo "<form action='feedback_dodelete.php' method='post'>";
        echo "<input type='hidden' name='feedbackid' value='".$feedbackid."'>";
        echo "<input type='submit' name='feedback_dodelete' value='Confirm'/>";
        echo "</form>";
    ?>

    <br>
    <br>
     <a href="feedback.php">Return</a>
     <br>
</body>
</html>