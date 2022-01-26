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
    <div class="container">
    <?php

        include 'connect.php';

        $query="SELECT cpfid,fname,datepaid,month,amount,cpfoa,cpfsa,cpfms FROM swaprj.cpf WHERE cpfid=" . $_GET['cpfID']; 
        $result=mysqli_query($conn, $query);

        //Getting the rows of data from the salary table
        $nrows=mysqli_num_rows($result); 
        if ($nrows>0) {                       //Create variables for the data in the salary table
            $row=mysqli_fetch_assoc($result);
            $cpfid=$row['cpfid'];
            $fname=$row['fname'];
            $datepaid=$row['datepaid'];
            $month=$row['month'];
            $amount=$row['amount'];
            $cpfoa=$row['cpfoa'];
            $cpfsa=$row['cpfsa'];
            $cpfms=$row['cpfms'];
        }
        else{
            echo "There are no records.<br>";
        }
        
            
    ?>
    <form action="cpf_doUpdate.php" method="post">
            
            <input type="hidden" name="cpfid" value="<?php echo $_GET['cpfID']; ?>">
            
            <label for="fname">Full Name</label>
            <input type="text" name="fname" value="<?php echo $fname; ?>">
    
            <label for="datepaid">Date Paid</label>
            <input type="text" name="datepaid" value="<?php echo $datepaid; ?>">
    
            <label for="month">For Month</label>
            <select name="month">
                <option><?php echo $month; ?></option>
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
            <input type="text" name="amount" value="<?php echo $amount; ?>">

            <label for="cpfoa">Updated CPF Ordinary Account</label>
            <input type="text" name="cpfoa" value="<?php echo $cpfoa; ?>">

            <label for="cpfsa">Updated CPF Special Account</label>
            <input type="text" name="cpfsa" value="<?php echo $cpfsa; ?>">

            <label for="cpfms">Updated CPF Medishield Account</label>
            <input type="text" name="cpfms" value="<?php echo $cpfms; ?>">

            <input class="button" type="submit"  value="Submit">
        </form>
        
    </div>
</body>
</html>