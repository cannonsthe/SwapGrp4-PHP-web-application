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
    <div class="container">
  <form action="feedback_create2.php" method="post">


    <label for="fname">Feedback ID</label>
    <input type="text" name="feedbackid">

    <label for="fname">Name</label>
    <input type="text" name="fname">
    <!---id="fname" placeholder="Your name"--->
    <label for="subject">Subject</label>
    <input type="text" name="subject">
    <!---id="subject" placeholder="Subject"--->
    <label for="email">Email</label>
    <input type="text" name="email">
    <!---id="email" placeholder="Your email"--->
    <label for="feedback">Feedback</label>
    <input type="text" style="height:200px" name="feedback">
    <!---id="feedback" placeholder="Feedback"--->
    <label for="department">Department</label>
    <input type="text" name="department">
    
    
    
    <input type="submit" value="Submit">



  </form>
</div>

</body>
</html>



