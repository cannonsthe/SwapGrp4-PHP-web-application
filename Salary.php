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

    <h1>Salary Records</h1>
    <p class="warning">These records are strictly confidential. Do not distribute or share without permission.Violators will be punished!</p>

    <form action="SForm_create.php">
        <input type="submit" class="createbtn" value="Add Records">
    </form>


     <?php
     session_start();
     if (!isset($_SESSION['user'])) {
        header("Location: index.php");     //Prevent broken access control
     }
     
     $con = mysqli_connect("localhost","root","","swaprj");  //Open a connection to database server(localhost,user,password,dbname)
     
     //Check if the connection works or not
     if (!$con){
        die('Failed to connect: ' .mysqli_connect_errno()); //Terminate current script and show error code
     }

     //Query swaprj database and select data from salary table
     $query="SELECT userid, amount, position, fname FROM swaprj.salary"; 
     $result=mysqli_query($con,$query); 
     
     //Getting the rows of data from the salary table
     $nrows=mysqli_num_rows($result);  //Data from each row from $result is taken through the mysqli_num_rows function and then sent to $nrows
     
     //Create a loop that returns each row of data until there is no more data left while there is at least one row of data
     if ($nrows>0){  
         echo "<table>";    //Print out table of data
             echo "<tr>";   //Print out a row for data to be filled in
                 echo "<th>UserID</th>";    //Print out the queried columns for printed row
                 echo "<th>Amount</th>";
                 echo "<th>Position</th>";
                 echo "<th>Name</th>"; 
                 echo "<th>Remove Row</th>";   
                 echo "<th>Modify Records</th>";
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
                 echo "<td>";
                 echo "<a href=SForm_delete.php?UserID=" . $row['userid'] . ">Delete</a>"; //Create a delete link that replaces old id with new id in another php page,UserID is to take the current id before deletion and store it for deletion
                 echo "</td>";
                 echo "<td>";
                 echo "<a href=SForm_update.php?UserID=" . $row['userid'] . ">Update</a>";
                 echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
     }
     else {
        echo "There are no salary records<br>";// If there is no data, this message will be displayed
     }
     
     ?>


</body>
</html>