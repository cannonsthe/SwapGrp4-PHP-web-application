<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Information Records</title>
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

    <strong><p style="font-size:40px;text-align:center;">Employee Information Records</p><strong>
    
    <form action="Employee_create.php">
        <input type="submit" class="add_button" value="Add Employee Information">
    </form>

    <br>

    <?php
    
        include 'connect.php';

    
        
        //Query swaprj database and select data from user information table
        $query="SELECT * FROM swaprj.user_information"; 
        $result=mysqli_query($conn,$query); 
     
        //Getting the rows of data from the user information table
        $nrows=mysqli_num_rows($result);  //Data from each row from $result is taken through the mysqli_num_rows function and then sent to $nrows
     
        //Create a loop that returns each row of data until there is no more data left while there is at least one row of data
        if ($nrows>0){  
         echo "<table>";    //Print out table of data
             echo "<tr>";   //Print out a row for data to be filled in
                 echo "<th>User ID</th>";    //Print out the queried columns for printed row
                 echo "<th>Full Name</th>";
                 echo "<th>Work Email</th>";
                 echo "<th>Department</th>"; 
                 echo "<th>Date Registered</th>";   
                 echo "<th>Position</th>";
                 echo "<th>Password</th>";
                 echo "<th>Bank Name</th>";
                 echo "<th>Bank Account</th>";
                 echo "<th>CPF Ordinary Account</th>";
                 echo "<th>CPF Special Account</th>";
                 echo "<th>CPF Medishield Account</th>";
                 echo "<th>Personal Email</th>";
                 echo "<th>Update</th>";
                 echo "<th>Delete</th>";
             echo "</tr>";
        while ($row=mysqli_fetch_assoc($result)) {  
             echo "<tr>";   //Print out next row after columns have been specified previously
                 echo "<td>";
                 echo $row['userid'];   //echo corresponding data for each column into the new row
                 echo "</td>";          
                 echo "<td>";
                 echo $row['fname'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['w_email'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['department'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['dateregistered'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['position'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['password'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['bankname'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['bankaccount'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['cpfoa'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['cpfsa'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['cpfms'];
                 echo "</td>";
                 echo "<td>";
                 echo $row['p_email'];
                 echo "</td>";
                 echo "<td>";
                 echo "<a href=Employee_update.php?UserID=" . $row['userid'] . ">Update</a>"; //Create a delete link that replaces old id with new id in another php page,UserID is to take the current id before deletion and store it for deletion
                 echo "</td>";
                 echo "<td>";
                 echo "<a href=Employee_delete.php?UserID=" . $row['userid'] . ">Delete</a>";
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