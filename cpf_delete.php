<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPF</title>
    <link rel="stylesheet" href="CPF.css">
</head>
<body>

    <div class="navbar">
       <a href="#" class="logo">FRecords</a>
       <div class="sections">
           <a href="Employee.php" >Employee Information</a>
           <a href="Salary.php">Employee Salary</a>
           <a href="Expenses.php" > General Expenses</a>
           <a href="CPF.php" class="active">CPF Contributions</a>
           <a href="feedback.php">Feedback</a>
           <a href="index.php">Logout</a>
       </div>
    </div>
    <?php

        include 'connect.php';

        $cpfid=$_POST['cpfid'];
        $fname=$_POST['fname'];
        $datepaid=$_POST['datepaid'];
        $month=$_POST['month'];
        $amount=$_POST['amount'];
        $cpfoa=$_POST['cpfoa'];
        $cpfsa=$_POST['cpfsa'];
        $cpfms=$_POST['cpfms'];

        echo "Are you going to delete this CPF ID? : ".$cpfid;
        echo "<form action='cpf_doDelete.php' method='post'>";
        echo "<input type='hidden' name='cpfid' value='".$cpfid."'>";
        echo "<input type='submit' name='cpf_doDelete' value='Confirm'/>";
        echo "</form>";
    ?>

    <br>
    <br>
     <a href="Employee.php">Return</a>
</body>
</html>