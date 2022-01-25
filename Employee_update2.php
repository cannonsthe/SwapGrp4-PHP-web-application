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

    <strong><p style="font-size:40px;margin-left:33%;">Add Employee Information</p><strong>
    
    <?php

        include 'connect.php';

        $userid=$_POST['userid'];
        $fname=$_POST['fname'];
        $w_email=$_POST['w_email'];
        $department=$_POST['department'];
        $dateregistered=$_POST['dateregistered'];
        $position=$_POST['position'];
        $password=$_POST['password'];
        $bankname=$_POST['bankname'];
        $bankaccount=$_POST['bankaccount'];
        $cpfoa=$_POST['cpfoa'];
        $cpfsa=$_POST['cpfsa'];
        $cpfms=$_POST['cpfms'];
        $p_email=$_POST['p_email'];

        $stmt = $conn->prepare("UPDATE swaprj.user_information SET fname=?, w_email=?, department=?, dateregistered=?, position=?, password=?, bankname=?, bankaccount=?, cpfoa=?, cpfsa=?, cpfms=?, p_email=? WHERE userid=?");
        $stmt->bind_param("ssssssssssssi", $fname, $w_email, $department, $dateregistered, $position, $password, $bankname, $bankaccount, $cpfoa, $cpfsa, $cpfms, $p_email, $userid);
        $res = $stmt->execute();
        if($res){
            echo "Update successfully";
        }else
            echo "Unable to update";
    ?>

    <br>
    <br>
     <a href="Employee.php">Return to Employee Information Records</a>
     <br>
</body>
</html>