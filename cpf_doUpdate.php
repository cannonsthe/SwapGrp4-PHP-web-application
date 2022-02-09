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
            <a href="Employee.php">Employee Information</a>
            <a href="Salary.php">Employee Salary</a>
            <a href="Expenses.php"> General Expenses</a>
            <a href="CPF.php" class="active">CPF Contributions</a>
            <a href="feedback.php">Feedback</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="container">
        <?php

        include 'connect.php';
        session_start();
                        if(!isset($_SESSION['user'])){
                            header("Location:index.php");
                        }
                        


        $fname = $_POST['fname'];
        $datepaid = $_POST['datepaid'];
        $month = $_POST['month'];
        $cpfid = $_POST['cpfid'];
        $amount = htmlspecialchars($_POST['amount']);
        $cpfoa=htmlspecialchars($_POST['cpfoa']);
        $cpfsa=htmlspecialchars($_POST['cpfsa']);
        $cpfms=htmlspecialchars($_POST['cpfms']);

        $errorarray = array();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
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

        $stmt = $conn->prepare("UPDATE swaprj.cpf SET fname=?, datepaid=?, month=?, amount=?, cpfoa=?, cpfsa=?, cpfms=? WHERE cpfid=?");
        $stmt->bind_param("sssssssi", $fname, $datepaid, $month, $amount, $cpfoa, $cpfsa, $cpfms, $cpfid);

        if (!empty($errorarray)) {
            foreach ($errorarray as $array) {
                echo $array;
                echo "<br>";
            }
        } else {
            $stmt->execute(); //execute query
            echo "<strong><h1 style='text-align:center;'>";
            echo "Successfully updated CPF record</h1></strong>";
        }

        ?>
        <form style="text-align:center;margin-top:5px;margin-bottom:5px;">
        <a href='CPF.php'>
        <input class='button' type='button' value='Return to CPF Contributions' /></a>
    </form>
        

    </div>
</body>

</html>