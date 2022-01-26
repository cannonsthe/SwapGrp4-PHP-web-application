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

        $cpfid=$_POST["cpfid"];

        $stmt = $conn->prepare("DELETE FROM cpf WHERE cpfid=? ");
        $stmt->bind_param("i", $cpfid);
        $res = $stmt->execute();
        if($res){
            echo "<h1 style='text-align:center;'>Delete successful";
            echo "<form style='text-align:center'>";
            echo "<a href='CPF.php'><input class='button' type='button' name='CPF' value='Return to CPF'/></a>";
            echo "</form>";
        }else
    	    echo "Unable to delete";
            
    ?>
        
    </div>
</body>
</html>