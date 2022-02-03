<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Information Confirmation</title>
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
           <a href="logout.php">Logout</a>
       </div>
    </div>

    <strong><p style="font-size:50px;text-align:center;">Success / Failure?</p><strong>
    
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
        
        //$hashAlgo = "sha256";
        //$hashValue = hash($hashAlgo, $password);

        $stmt = $conn->prepare("INSERT into swaprj.user_information VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("issssssssssss", $userid, $fname, $w_email, $department, $dateregistered, $position, $password, $bankname, $bankaccount, $cpfoa, $cpfsa, $cpfms, $p_email);
        $res = $stmt->execute();
        if($res){
            echo "<strong><h1 style='text-align:center;'>";
            echo "Successfully Insert USER INFORMATION</h1></strong>";
        }else
            echo "Unable to insert";
    ?>

    <br>
    <br>
    <form style="text-align:center;margin-top:5px;margin-bottom:5px;">
        <a href='Employee.php'>
        <input class='return' type='button' value='Return to Employee Information Records' /></a>
    </form>
     <br>
</body>
</html>