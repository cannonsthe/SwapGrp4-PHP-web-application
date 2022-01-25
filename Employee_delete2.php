<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Information</title>
    <link rel="stylesheet" href="Employee.css">
</head>
<body>

    <div class="navbar">
       <a href="#" class="logo">FRecords</a>
       <div class="sections">
           <a href="#" class="active">Employee Information</a>
           <a href="Salary.php">Employee Salary</a>
           <a href="Expenses.php" > General Expenses</a>
           <a href="CPF.php" >CPF Contributions</a>
           <a href="feedback.php">Feedback</a>
           <a href="index.php">Logout</a>
       </div>
    </div>

    <strong><p style="font-size:40px;margin-left:33%;">Delete Employee Information</p><strong>
    
    <?php

        include 'connect.php';

        $userid=$_POST['userid'];
        $fname=$_POST['fname'];
        $w_email=$_POST['w_email'];
        $department=$_POST['department'];
        $dateregistered=$_POST['dateregistered'];
        $position=$_POST['position'];
        $password=$_POST['password'];
        $bankname=$_POST['bankname'];
        $bankaccount=$_POST['bankaccount'];
        $cpfoa=$_POST['cpfoa'];
        $cpfsa=$_POST['cpfsa'];
        $cpfms=$_POST['cpfms'];
        $p_email=$_POST['p_email'];

        echo "Are you going to delete this user information? ".$userid;
        echo "<form action='Employee_doDelete.php' method='post'>";
        echo "<input type='hidden' name='userid' value='".$userid."'>";
        echo "<input type='submit' name='Employee_doDelete' value='Confirm'/>";
        echo "</form>";
    ?>

    <br>
    <br>
     <a href="Employee.php">Return</a>
     <br>
</body>
</html>