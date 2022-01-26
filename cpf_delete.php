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
    <?php

        include 'connect.php';
        $cpfid=$_POST['cpfid'];

        $stmt = $conn->prepare("SELECT cpfid FROM swaprj.cpf WHERE cpfid=?");
        
        $res = $stmt->execute();
        $stmt->bind_result($cpfid);
        $stmt->store_result();
        while($stmt->fetch()){



        //Query swaprj database and select data from salary table
        //$query="SELECT fname,datepaid,month,amount,cpfoa,cpfsa,cpfms FROM swaprj.cpf WHERE cpfid=?"; 
        //$result=mysqli_query($conn, $query);

        //$nrows=mysqli_num_rows($result); 
        //if ($nrows>0) {                    
            //$row=mysqli_fetch_assoc($result);
            //$fname=$row['cpfid'];
            //$fname=$row['fname'];
            //$fname=$row['datepaid'];
            //$fname=$row['month'];
            //$fname=$row['amount'];
            //$cpfoa=$row['cpfoa'];
            //$cpfsa=$row['cpfsa'];
            //$cpfms=$row['cpfms'];
           
        //}
        //else{
           // echo "There are no records.<br>";
        //}

        echo "Are you going to delete this CPF ID? : ".$cpfid;
        echo "<form action='cpf_doDelete.php' method='post'>";
        echo "<input type='hidden' name='cpfid' value='".$cpfid."'>";
        echo "<input type='submit' name='cpf_doDelete' value='Confirm'/>";
        echo "</form>";
        }
    ?>

    <br>
    <br>
     <a href="Employee.php">Return</a>
</body>
</html>