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
    <div class="container2" style="margin-top:25px;">
    <?php

        include 'connect.php';

        $cpfid=$_POST['cpfid'];
        $fname=$_POST['fname'];
        $datepaid=$_POST['datepaid'];
        $month=$_POST['month'];
        $amount=$_POST['amount'];


        $stmt = $conn->prepare("INSERT into swaprj.cpf VALUES(?,?,?,?,?)");
        $stmt->bind_param("issss", $cpfid, $fname, $datepaid, $month, $amount);
        $res = $stmt->execute();
        if($res){
            echo "Insert successfully";
        }else
            echo "Unable to insert";
    ?>
</body>
</html>