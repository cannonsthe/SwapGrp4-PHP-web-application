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

    <?php

    $userid=$_POST['userid'];
    $amount=$_POST['amount'];         //Use POST method to retrive data under columns in salary table
    $position=$_POST['position'];
    $name=$_POST['fname'];

    
    $con = mysqli_connect("localhost","root","","swaprj");  //Open a connection to database server(localhost,user,password,dbname)
     
     //Check if the connection works or not
     if (!$con){
        die('Failed to connect: ' .mysqli_connect_errno()); //Terminate current script and show error code
     }

     $query="INSERT INTO swaprj.salary (userid,amount,position,fname)" .
     "VALUES ('$userid', '$amount', '$position', '$name');";
     $result=mysqli_query($con,$query);
     if(!$result){
        echo ("Failed to add Records<br>");
        echo mysqli_error($con). "<br>";
     }
     else{
         echo "Records added successfully!<br>";
     }
     ?>


     <br>
     <a href="Salary.php" class="Dbackbtn">Back to Salary Records</a>
     <br>

</body>
</html>  