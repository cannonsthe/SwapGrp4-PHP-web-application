<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FRecords</title>
    <link rel="stylesheet" href="HomePage.css">
    <link rel="stylesheet" href="Expenses.css">
</head>

<body>
    <?php
    error_reporting(1);
    ini_set ('display_errors', 1);
    include ('connect.php');
    ?>
    <div class="navbar">
        <a href="#" class="logo">FRecords</a>
        <div class="sections">
            <a href="Employee.php">Employee Information</a>
            <a href="Salary.php">Employee Salary</a>
            <a href="Expenses.php" class="active"> General Expenses</a>
            <a href="CPF.php">CPF Contributions</a>
            <a href="feedback.php">Feedback</a>
            <a href="index.php">Logout</a>
        </div>
    </div>
    <?php
    session_start();
    $token = hash("sha256",uniqid(rand(), TRUE));
    $_SESSION['token'] = $token;
    $_SESSION['token_time'] = time();?>
    <br><br>
    <form action="/Expenses.php" class="center" method="POST">
        <label for="year1" class="center">Choose a year to display expenses for:</label>
        <select name="year" id="year">
            <option value="All" name="">All</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
        </select>
        <br><br>
        <input type="submit" value="Retrieve" name="get1" id="get1">
        <?php
        $year = $_POST['year']; #Test Retrieve
        if ($year == null) {
            $year = 'All';
        };
        if ($year == "All") {
            $query = $con->prepare("select * from expenses");
            $query->bind_result($expenseid, $year, $type, $amount);
            $query->execute();
            echo "<table class='salary'><tr>";
            echo
            "<th>| Expense ID</th><th>| Year |</th><th>Type of Expense |</th><th> Amount($) |</t
            h></tr>";
            while ($query->fetch()) {
                echo
                "<th>$expenseid</th><th>$year</th><th>$type</th><th>$amount</t
            h></tr>";
            }
            echo "</table>";
        } else/* ($year>=0000) */ {

            $query = $con->prepare("select * from expenses WHERE year=?");
            $query->bind_param("s",$year);
            $query->bind_result($expenseid, $year, $type, $amount);
            $query->execute();
            echo "<table class='salary'><tr>";
            echo
            "<th>| Expense ID</th><th>| Year |</th><th>Type of Expense |</th><th> Amount($) |</t
            h></tr>";
            while ($query->fetch()) {
                //do something
                echo
                "<th>$expenseid</th><th>$year</th><th>$type</th><th>$amount</t
            h></tr>";
            }
            echo "</table>";
        }
        ?>
    </form>
    <br><br><br><br>
    <form action="/Expenses_Crud.php" method="POST">
    <input type ="hidden" name="token" value="<?php echo $token; ?>" />
        <fieldset>
            <legend>Form:</legend>
            <input type="radio" value="add" name="actiontype" >Add<br>
            <input type="radio" value="update" name="actiontype" >Update<br>
            <input type="radio" value="delete" name="actiontype" >Delete <br>
            <label for="year">Year of Expense:</label>
            <input type="text" id="year" name="year" ><br><br>
            <label for="type">Type of Expense:</label>
            <input type="text" id="type" name="type" ><br><br>
            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount" ><br><br>
            <label for="expenseid">Expense ID (Only Use For Updating or Deleting!):</label>
            <input type="text" id="expenseid" name="expenseid" step="1"><br><br>
            <input type="submit" name="action" value="Do">
        </fieldset>
    </form>

</body>

</html>