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

    <?php
     
     $con = mysqli_connect("localhost","root","","swaprj");  //Open a connection to database server(localhost,user,password,dbname)
     
     //Check if the connection works or not
     if (!$con){
        die('Failed to connect: ' .mysqli_connect_errno()); //Terminate current script and show error code if connection fails
     }

     //Query swaprj database and select data from salary table
     $query="SELECT userid, amount, position, fname FROM swaprj.salary". "WHERE id=" . $_GET['userid'];  //Run GET request for new id along with select query data
     $result=mysqli_query($con,$query); 
     
     //Getting the rows of data from the salary table
     $nrows=mysqli_num_rows($result);  
     
     //Create a loop that returns each row of data until there is no more data left while there is at least one row of data
     if ($nrows>0){  
         echo "<table>";    //Print out table of data
             echo "<tr>";   //Print out a row for data to be filled in
                 echo "<th>UserID</th>";    //Print out the queried columns for printed row
                 echo "<th>Amount</th>";
                 echo "<th>Position</th>";
                 echo "<th>Name</th>"; 
             echo "</tr>";
        while ($row=mysqli_fetch_assoc($result)) {  
             echo "<tr>";   //Print out next row after columns have been specified previously
                 echo "<td>";
                 echo $row['userid'];   //echo corresponding data for each column into the new row
                 echo "</td>";          
                 echo "<td>";
                 echo $row['amount'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['position'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['fname'];
                 echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
     }
     else {
        echo "There are no salary records<br>";// If there is no data, this message will be displayed
     }
     
     ?>
      
      <!--Redirects user to another page for deletion confirmation using GET method-->
     <form action="SProcessdelete.php" method="get">   
     <input type="hidden" name="UserID" value="<?php echo $_GET['userid']; ?>"><br>    <!--Sends old id to be removed to database server in hidden data form and then runs GET request for new id-->
     <input type="submit" value="Click to confirm deletion">
     </form>

</body>
</html>