<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Information</title>
    <link rel="stylesheet" href="Employee.css">
</head>
<body>

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

    <strong><p style="font-size:40px;margin-left:33%;">Delete Employee Information</p><strong>
    
    <?php

        include 'connect.php';

        $userid=$_POST["userid"];

        $stmt = $conn->prepare("DELETE FROM swaprj.user_information WHERE userid=?");
        $stmt->bind_param("i", $userid);
        $res = $stmt->execute();
        if($res){
            echo "Delete successfully";
        }else
            echo "Unable to delete";
    ?>

    <br>
    <br>
     <a href="Employee.php">Return to Employee Information Records</a>
     <br>
</body>
</html>