<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee Information Confirmation</title>
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
        $cpfoa=htmlspecialchars($_POST['cpfoa']);
        $cpfsa=htmlspecialchars($_POST['cpfsa']);
        $cpfms=htmlspecialchars($_POST['cpfms']);
        $p_email=$_POST['p_email'];

        $errorarray = array();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($dateregistered)) {
                array_push($errorarray, "Date paid is required!");
            } elseif (!is_numeric($dateregistered) || strlen($dateregistered) != 8) {
                array_push($errorarray, "Please give a proper date format! (YYYYMMDD)");
            }

            if (is_numeric($cpfoa)) {
                $cpfoa = round(floatval($_POST['cpfoa']), 2);
                if (is_float($cpfoa) && $cpfoa >= 1) {
                }
            } else {
                array_push($errorarray, "Invalid CPF Ordinary Account Balance! Please input a proper amount!");
            }

            if (is_numeric($cpfsa)) {
                $cpfsa = round(floatval($_POST['cpfsa']), 2);
                if (is_float($cpfsa) && $cpfsa >= 1) {
                }
            } else {
                array_push($errorarray, "Invalid CPF Special Account Balance! Please input a proper amount!");
            }

            if (is_numeric($cpfms)) {
                $cpfms = round(floatval($_POST['cpfms']), 2);
                if (is_float($cpfms) && $cpfms >= 1) {
                }
            } else {
                array_push($errorarray, "Invalid CPF Medishield Balance! Please input a proper amount!");
            }

        }

        $stmt = $conn->prepare("UPDATE swaprj.user_information SET fname=?, w_email=?, department=?, dateregistered=?, position=?, password=?, bankname=?, bankaccount=?, cpfoa=?, cpfsa=?, cpfms=?, p_email=? WHERE userid=?");
        $stmt->bind_param("ssssssssssssi", $fname, $w_email, $department, $dateregistered, $position, $password, $bankname, $bankaccount, $cpfoa, $cpfsa, $cpfms, $p_email, $userid);
        
        if (!empty($errorarray)) {
            foreach ($errorarray as $array) {
                echo $array;
                echo "<br>";
            }
        } else {
            $stmt->execute(); //execute query
            echo "<strong><h1 style='text-align:center;'>";
            echo "Successfully Update USER INFORMATION</h1></strong>";
        }

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