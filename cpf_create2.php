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
    <div class="container" style="margin-top:25px;">
    <?php

        include 'connect.php';
        session_start();
                        if(!isset($_SESSION['user'])){
                            header("Location:index.php");
                        }
                        

        $cpfid=$_POST['cpfid'];
        $fname=$_POST['fname'];
        $datepaid=$_POST['datepaid'];
        $month=$_POST['month'];
        $amount = htmlspecialchars($_POST['amount']);
        $cpfoa=htmlspecialchars($_POST['cpfoa']);
        $cpfsa=htmlspecialchars($_POST['cpfsa']);
        $cpfms=htmlspecialchars($_POST['cpfms']);

        $errorarray = array();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($datepaid)) {
                array_push($errorarray, "Date paid is required!");
            } elseif (!is_numeric($datepaid) || strlen($datepaid) != 8) {
                array_push($errorarray, "Please give a proper date format! (YYYYMMDD)");
            }

            
            if (is_numeric($amount)) {
                $amount = round(floatval($_POST['amount']), 2);
                if (is_float($amount) && $amount >= 1) {
                }
            } else {
                array_push($errorarray, "Invalid amount! Please input a proper amount!");
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

        $stmt = $conn->prepare("INSERT into swaprj.cpf VALUES(?,?,?,?,?,?,?,?)");
        $stmt->bind_param("isssssss", $cpfid, $fname, $datepaid, $month, $amount, $cpfoa, $cpfsa, $cpfms);
        
        if (!empty($errorarray)) {
            foreach ($errorarray as $array) {
                echo $array;
                echo "<br>";
            }
        } else {
            $stmt->execute(); //execute query
            echo "<strong><h1 style='text-align:center;'>";
            echo "Successfully added CPF record</h1></strong>";
        }

    ?>
    <form style="text-align:center;margin-top:5px;margin-bottom:5px;">
        <a href='CPF.php'>
        <input class='button' type='button' value='Return to CPF Contributions' /></a>
    </form>
</body>
</html>