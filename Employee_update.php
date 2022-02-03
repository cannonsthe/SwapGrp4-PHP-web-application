<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Information</title>
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
           <a href="logout.php">Logout</a>
       </div>
    </div>

    <strong><p style="font-size:40px;text-align:center;">Update Employee Information</p><strong>
    
    <?php
     
        include 'connect.php';

        //Query swaprj database and select data from salary table
        $query="SELECT userid, fname, w_email, department, dateregistered, position, password, bankname, bankaccount, cpfoa, cpfsa, cpfms, p_email FROM swaprj.user_information WHERE userid=" . $_GET['UserID']; 
        $result=mysqli_query($conn, $query);

        //Getting the rows of data from the salary table
        $nrows=mysqli_num_rows($result); 
        if ($nrows>0) {                       //Create variables for the data in the salary table
            $row=mysqli_fetch_assoc($result);
            $userid=$row['userid'];
            $fname=$row['fname'];
            $w_email=$row['w_email'];
            $department=$row['department'];
            $dateregistered=$row['dateregistered'];
            $position=$row['position'];
            $password=$row['password'];
            $bankname=$row['bankname'];
            $bankaccount=$row['bankaccount'];
            $cpfoa=$row['cpfoa'];
            $cpfsa=$row['cpfsa'];
            $cpfms=$row['cpfms'];
            $p_email=$row['p_email'];
        }
        else{
            echo "There are no records.<br>";
        }
    ?>

    <div class="container">
        <form action="Employee_update2.php" method="post">
            <img src="/pictures/EmployeeInformation_UserInformation.png" id="icon" alt="User Icon" style="width:250px; margin-left:40%" />
            </br>    
            <!--strong><label for="userid" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">User ID</label></strong-->
            <input type="hidden" class="form-control" name="userid" value="<?php echo $_GET['UserID']; ?>">
            </br>
            <strong><label for="fname" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">Full Name</label></strong>
            <input type="text" class="form-control" name="fname" value="<?php echo $fname; ?>">
            </br>
            <strong><label for="w_email" style="margin: 5px auto 0px auto;font-size: 20px;">Work Email</label></strong>
            <input type="text" class="form-control" name="w_email" value="<?php echo $w_email; ?>">
            </br>
            <strong><label for="department" style="margin: 5px auto 0px auto;font-size: 20px;">Department</label></strong>
            <input type="text" class="form-control" name="department" value="<?php echo $department; ?>">
            </br>
            <strong><label for="dateregistered" style="margin: 5px auto 0px auto;font-size: 20px;">Date Registered</label></strong>
            <input type="text" class="form-control" name="dateregistered" value="<?php echo $dateregistered; ?>">
            </br>
            <strong><label for="position" style="margin: 5px auto 0px auto;font-size: 20px;">Position</label></strong>
            <input type="text" class="form-control" name="position" value="<?php echo $position; ?>">
            </br>
            <strong><label for="password" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">Password</label></strong>
            <input type="text" class="form-control" name="password" value="<?php echo $password; ?>">
            </br>
            <strong><label for="bankname" style="margin: 5px auto 0px auto;font-size: 20px;">Bank Name</label></strong>
            <input type="text" class="form-control" name="bankname" value="<?php echo $bankname; ?>">
            </br>
            <strong><label for="bankaccount" style="margin: 5px auto 0px auto;font-size: 20px;">Bank Account</label></strong>
            <input type="text" class="form-control" name="bankaccount" value="<?php echo $bankaccount; ?>">
            </br>
            <strong><label for="cpfoa" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">CPF Ordinary Account</label></strong>
            <input type="text" class="form-control" name="cpfoa" value="<?php echo $cpfoa; ?>">
            </br>
            <strong><label for="cpfsa" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">CPF Special Account</label></strong>
            <input type="text" class="form-control" name="cpfsa" value="<?php echo $cpfsa; ?>">
            </br>
            <strong><label for="cpfms" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">CPF Medishield Account</label></strong>
            <input type="text" class="form-control" name="cpfms" value="<?php echo $cpfms; ?>">
            </br>
            <strong><label for="p_email" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">Personal Email</label></strong>
            <input type="text" class="form-control" name="p_email" value="<?php echo $p_email; ?>">
            </br>
            <input type="submit" class="submit_add" value="UPDATE">
        </form>
    </div>
</body>
</html>