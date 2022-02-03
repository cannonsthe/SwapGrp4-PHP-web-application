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
           <a href="logout.php">Logout</a>
       </div>
    </div>
    <div class="container">
    <?php

        include 'connect.php';

        
            




        //Query swaprj database and select data from salary table
        $query="SELECT cpfid FROM swaprj.cpf WHERE cpfid=" . $_GET['cpfID'] ; 
        $result=mysqli_query($conn, $query);

        $nrows=mysqli_num_rows($result); 
        if ($nrows>0) {                    
            $row=mysqli_fetch_assoc($result);
            $cpfid=$row['cpfid'];
            
           
        }
        else{
           echo "There are no records.<br>";
        }

        
        echo "<h1>Are you sure you want to delete this CPF ID? : ".$cpfid."</h1>";
        echo "<table><tr>";
        echo "<td><form action='cpf_doDelete.php' method='post' style=''>";
        echo "<input type='hidden' name='cpfid' value='".$cpfid."'>";
        echo "<input class='button' type='submit' name='cpf_doDelete' value='YES'/>";
        echo "</form></td>";
        echo "<td>";
        echo "<a href='CPF.php' style='margin-left:5px;'><input class='button' type='button' name='CPF' value='NO'/></a>";
        echo "</form></td>";
        
            
    ?>
        
    </div>
</body>
</html>