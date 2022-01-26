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
    <div class="container2">
    
<?php


$feedbackid = $_POST['feedbackid'];
$fname = $_POST['fname'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$department = $_POST['department'];

include 'connect.php';

//$method = $_SERVER['REQUEST_METHOD'];

//$query="INSERT INTO swaprj.cpf (fname,email,subject,feedback)" .
     //"VALUES (?, ?, ?, ?);";
     //$result=mysqli_query($con,$query);
     //if(!$result){
        //echo ("INSERT Failed<br>");
        //echo mysqli_error($con). "<br>";
     //}
     //else{
         //echo "INSERT OK<br>";
     //}

     $stmt = $conn->prepare("INSERT into swaprj.feedback VALUES(?,?,?,?,?,?)");
     $stmt->bind_param("isssss", $feedbackid, $fname, $subject, $email, $feedback, $department);
     $res = $stmt->execute();
     if($res){
         echo "<p style='text-align:center;'>Insert successful</p>";
     }else
        echo "Unable to insert";
    
?>
        <form style="text-align:center;margin-top:5px;margin-bottom:5px;">
            <a href="feedback.php">
            <input class="button" type="button" value="View Feedback" /></a>
        </form>
</div>
</body>
</html>