<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary</title>
    <link rel="stylesheet" href="Salary.css">
</head>
<body>
    
     <div class="navbar">   <!--Navigation bar-->
       <a href="#" class="logo">FRecords</a>
       <div class="sections">                                        
           <a href="Employee.php" >Employee Information</a>
           <a href="#" class="active">Employee Salary</a>
           <a href="Expenses.php" > General Expenses</a>
           <a href="CPF.php">CPF Contributions</a>
           <a href="feedback.php">Feedback</a>
           <a href="index.php">Logout</a>
       </div>
    </div>

     <b>Add Records</b><br>
     <form action="SProcess_create.php" method="post">        <!--Create form for adding record-->
         UserID: <input type="text" name-="id"><br>
         Amount: <input type="text" name="amount"><br>
         Position: <input type="text" name="position"><br>
         Name: <input type="text" name="fname"><br>
         <input type="submit" value="Submit">
     </form>
    
</body>
</html>