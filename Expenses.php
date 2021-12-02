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
            <!--  <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option> -->
        </select>
        <br><br>
        <input type="submit" value="Retrieve">
    </form>

    <table class="salary">
        <tr>
            <td>ID</td>
            <td>Date</td>
            <td>Type of Expenses</td>
            <td>Amount</td>
        </tr>
        <br>

        <tr>
            <br>
            <td>20190001</td>
            <td>3/1/2019</td>
            <td>Freight Expenses </td>
            <td>8000</td>
        </tr>

        <tr>
            <td>20190002</td>
            <td>16/1/2019</td>
            <td>Utilities</td>
            <td>10000</td>
        </tr>

        <tr>
            <td>20190003</td>
            <td>28/1/2019</td>
            <td>Employee's salary</td>
            <td>30000</td>
        </tr>

        <tr>
            <td>20190004</td>
            <td>27/5/2019</td>
            <td>Maintenance fees</td>
            <td>6000</td>
        </tr>
    </table>
    <br><br><br><br>
    <form action="/action_page.php">
        <fieldset>
            <legend>Form:</legend>
            <label for="id">Expense ID:</label>
            <input type="text" id="id" name="id"><br><br>
            <label for="type">Type of Expense:</label>
            <input type="text" id="type" name="type"><br><br>
            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount"><br><br>
            <label for="date1">Date of entry:</label>
            <input type="date" id="date1" name="date1"><br><br>
            <input type="submit" value="Create new">
            <input type="submit" value="Update">
            <input type="submit" value="Delete">
        </fieldset>
    </form>

</body>

</html>