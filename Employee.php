<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPF</title>
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

    <strong><p style="font-size:40px;margin-left:36%;">Employee Information</p><strong>

    <?php
    
        include 'connect.php';

    
        
        $stmt = $conn->prepare("SELECT * FROM swaprj.user_information");
        $res = $stmt->execute();
        $stmt->bind_result($userid,$fname,$w_email,$department,$dateregistered,$position,$password,$bankname,$bankaccount,$cpfoa,$cpfsa,$cpfms,$p_email);
        $stmt->store_result();
        echo "<table border='1'>";
        echo "<tr><th>"."User ID"."</th><th>"."Full Name"."</th><th>"."Work Email"."</th><th>"."Department"."</th><th>"."Date Registered"."</th><th>"."Position"."</th><th>"."Password"."</th><th>"."Bank Name"."</th><th>"."Bank Account"."</th><th>"."CPF Ordinary Account"."</th><th>"."CPF Special Account"."</th><th>"."CPF Medishield"."</th><th>"."Personal Email"."</th></tr>";
        while($stmt->fetch()){
            echo "<tr><td>".$userid."</td><td>".$fname."</td><td>".$w_email."</td><td>".$department."</td><td>".$dateregistered."</td><td>".$position."</td><td>".$password."</td><td>".$bankname."</td><td>".$bankaccount."</td><td>".$cpfoa."</td><td>".$cpfsa."</td><td>".$cpfms."</td><td>".$p_email."</td></tr>";
        }
        echo "</table>";

    ?>
</body>
</html>