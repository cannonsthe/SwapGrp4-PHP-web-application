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
<?php 
    session_start();
    $token = hash("sha256",uniqid(rand(), TRUE));
    $_SESSION['token'] = $token;
                        if(!isset($_SESSION['user'])){
                            header("Location:index.php");

                        }
                        
                        ?>

    <div class="navbar">
       <a href="#" class="logo">FRecords</a>
       <div class="sections">
           <a href="Employee.php" >Employee Information</a>
           <a href="Salary.php">Employee Salary</a>
           <a href="Expenses.php" > General Expenses</a>
           <a href="CPF.php" class="active">CPF Contributions</a>
           <a href="feedback.php">Feedback</a>
           <a href="logout.php">Logout</a>
       </div>
    </div>
    <div class="container2" style="margin-top:25px;">
        <form action="cpf_create2.php" method="post">


 
            <input type="hidden" name="cpfid">

            <label for="fname">Full Name</label>
            <input type="text" name="fname" required>
    
            <label for="datepaid">Date Paid</label>
            <input type="text" name="datepaid" required>
    
            <label for="month">For Month</label>
            <select name="month" required>
                <option></option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
            </select>
    
            <label for="amount">Amount</label>
            <input type="text" name="amount" required>

            <label for="cpfoa">Updated CPF Ordinary Account</label>
            <input type="text" name="cpfoa" required>

            <label for="cpfsa">Updated CPF Special Account</label>
            <input type="text" name="cpfsa" required>

            <label for="cpfms">Updated CPF Medishield Account</label>
            <input type="text" name="cpfms" required>
    
    
    
            <input class="button" type="submit" value="Submit">



        </form>
    </div>
    
</body>
</html>