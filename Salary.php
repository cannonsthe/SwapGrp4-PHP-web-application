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
       <div class="sections">                                        <!--Different sections and links to the pages-->
           <a href="Employee.php" >Employee Information</a>
           <a href="#" class="active">Employee Salary</a>
           <a href="Expenses.php" > General Expenses</a>
           <a href="CPF.php">CPF Contributions</a>
           <a href="feedback.php">Feedback</a>
           <a href="index.php">Logout</a>
       </div>
    </div>

    <h1>Salary Records</h1>
    <p class="warning">These records are strictly confidential. Do not distribute or share without permission.Violators will be punished!</p>

       <table class="salary">      <!--Table-->
           <tr>
              <td>Name</td> 
              <td>Salary</td>
              <td>Position</td>
              <td>Id No.</td>
            </tr>

           <tr>
              <td>Alex Tay</td> 
              <td>$76,000 SGD</td>
              <td>Finance Manager</td>
              <td>29891746</td>
           </tr>

           <tr>
              <td>Mary Kiat</td> 
              <td>$78,000 SGD</td>
              <td>Pricing Analyst</td>
              <td>44568973</td>
            </tr>

           <tr>
              <td>Eng Lai Fa</td> 
              <td>$220,000 SGD</td>
              <td>Finance Director</td>
              <td>78635468</td>
           </tr>
        </table>

     <?php
     //Creating mysql variables to specify attributes for mysql connection
     $mysql_host="localhost";  //MySQL server's ip address
     $mysql_user="root";   //MySQL server's user privilege
     $mysql_password="";  //MySQL server's password
     
     
     $con = mysqli_connect($mysql_host,$mysql_user,$mysql_password);  //Open a connection to database server
     
     //Check if the connection works or not
     if (!$con){
        echo mysqli_connect_errno() ."<br>";  //If connection does not work, echo error code
        die('Failed to connect: ' .mysqli_connect_error()); //Terminate current script and show error description
     }
     else {
        echo "Connection to server at $mysql_host successful<br>";  // Echo successful connection
     }
     
     echo "Disconnecting now<br>";
     mysqli_close($con);      //Close previously opened database connection
     
     ?>



</body>
</html>