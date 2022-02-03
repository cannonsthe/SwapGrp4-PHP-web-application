<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Employee Information Confirmation 1</title>
    <link rel="stylesheet" href="Employee.css">
</head>
<body>

    <?php
        include 'session.php';
    ?>

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

    <strong><p style="font-size:50px;text-align:center;">Confirmation?</p><strong>
    
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

        echo "<strong><h2 style='text-align:center;'>";
        echo "Are you going to delete ".$fname."'s Information?</h2></strong>";
        echo "<table>";
        echo "<td><form action='Employee_doDelete.php' method='post'>";
        echo "<input type='hidden' name='userid' value='".$userid."'>";
        echo "<input class='submit_add2' type='submit' name='Employee_doDelete'  value='Yes'/>";
        echo "</form></td>";
        echo "<td>";
        echo "<a href='Employee.php' style='margin-left:5px;'><input class='submit_add2' type='button' name='Employee' value='NO'/></a>";
        echo "</form></td>";
        echo "</strong>";
    ?>

</body>
</html>