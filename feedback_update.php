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
    <br><br>

    <?php
     
        include 'connect.php';

        //Query swaprj database and select data from salary table
        $query="SELECT * FROM swaprj.feedback WHERE userid=" . $_GET['userid']; 
        $result=mysqli_query($conn, $query);

        //Getting the rows of data from the salary table
        $nrows=mysqli_num_rows($result); 
        if ($nrows>0) {                       //Create variables for the data in the salary table
            $row=mysqli_fetch_assoc($result);
            $userid=$row['userid'];
            $feedbackid=$row['feedbackid'];
            $fname=$row['fname'];
            $subject=$row['subject'];
            $email=$row['email'];
            $feedback=$row['feedback'];
            $department=$row['department'];
            
        }
        else{
            echo "There are no records.<br>";
        }
    ?>
    <div class="container">
    <form action="feedback_update2.php" method="get">


<label for="userid">User ID</label>
<input type="text" name="userid" value="<?php echo $_GET['userid']; ?>">

<label for="feedbackid">Feedback ID</label>
<input type="text" name="feedbackid" value="<?php echo $feedbackid; ?>">

<label for="fname">Name</label>
<input type="text" name="fname" value="<?php echo $fname; ?>">
<!---id="fname" placeholder="Your name"--->
<label for="subject">Subject</label>
<input type="text" name="subject" value="<?php echo $subject; ?>">
<!---id="subject" placeholder="Subject"--->
<label for="email">Email</label>
<input type="text" name="email" value="<?php echo $email; ?>">
<!---id="email" placeholder="Your email"--->
<label for="feedback">Feedback</label>
<textarea style="height:200px" name="feedback" value="<?php echo $feedback; ?>"></textarea>
<!---id="feedback" placeholder="Feedback"--->
<label for="department">Department</label>
<input type="text" name="department" value="<?php echo $department; ?>">




<input type="submit" value="Update">


</form>
</body>