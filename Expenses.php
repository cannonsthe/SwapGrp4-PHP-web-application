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
    <br><br>
    <form action="/expenses_page.php" class="center">
        <label for="month" class="center">Choose a year to display expenses for:</label>
        <select name="month" id="month">
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
        </select>
        <br><br>
        <input type="submit" value="Retrieve">
    </form>
    <?php
    $con = mysqli_connect("localhost", "root", "", "swaprj"); //connect to database
    if (!$con) {
        die('Could not connect: ' . mysqli_connect_errno()); //return error is
    }
    $query = $con->prepare("select * from expenses");
    $query->execute();
    $query->bind_result($expenseid, $date, $type, $amount);
    echo "<table class='salary'><tr>";
    echo
    "<th>| Expense ID</th><th>| Date |</th><th>Type of Expense |</th><th> Amount |</t
    h></tr>";
    while ($query->fetch()) {
        //do something
        echo
        "<th>$expenseid</th><th>$date</th><th>$type</th><th>$amount</t
    h></tr>";
    }
    echo "</table>";
    ?>


    <br><br><br><br>
    <form action="/Expenses_post.php" method="POST">
        <fieldset>
            <legend>Form:</legend>
            
            <label for="year">Year of Expense:</label>
            <input type="text" id="year" name="year"><br><br>
            <label for="type">Type of Expense:</label>
            <input type="text" id="type" name="type"><br><br>
            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount"><br><br>
            <input type="submit" value="Create new">
        </fieldset>
    </form>

</body>

</html>