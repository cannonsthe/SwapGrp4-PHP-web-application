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
           <a href="Logout.php">Logout</a>
       </div>
    </div>


    <?php

    session_start();
    if (!isset($_SESSION['user'])) {     //Prevent broken access control
       header("Location: index.php");
    }

     $con = mysqli_connect("localhost","root","","swaprj");  //Open a connection to database server(localhost,user,password,dbname)
     
     //Check if the connection works or not
     if (!$con){
        die('Failed to connect: ' .mysqli_connect_errno()); //Terminate current script and show error code
     }

     //Query swaprj database and select data from salary table
     $query="SELECT userid, amount, position, fname FROM swaprj.salary ". "WHERE userid=" . $_GET['UserID'];
     $result=mysqli_query($con, $query);

     //Getting the rows of data from the salary table
     $nrows=mysqli_num_rows($result); 
     if ($nrows>0) {                       //Create variables for the data in the salary table
         $row=mysqli_fetch_assoc($result);
         $userid=$row['userid'];
         $amount=$row['amount'];
         $position=$row['position'];
         $name=$row['fname'];
     }
     else{
         echo "There are no records<br>";
     }

    ?>
    
    
    <!--Create form for updating-->
    <form action="SProcess_update.php" method="post">
    <input type="hidden" name="userid" value="<?php echo $_GET['UserID']; ?>"><br>
    Amount: <input type="text" name="amount" value="<?php echo $amount; ?>" required><br>
    Position: <input type="text" name="position" value="<?php echo $position; ?>" required><br>
    Name: <input type="text" name="fname" value="<?php echo $name; ?>" required><br>
    <input type="submit" value="Click to update records">
    </form>

</body>
</html>