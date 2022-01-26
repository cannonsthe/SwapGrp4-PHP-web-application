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
        <form action="cpf_create2.php" method="post">


            <label for="fname">CPF ID</label>
            <input type="text" name="cpfid">

            <label for="fname">Full Name</label>
            <input type="text" name="fname">
    
            <label for="datepaid">Date Paid</label>
            <input type="text" name="datepaid">
    
            <label for="month">For Month</label>
            <select name="month">
                <option></option>
                <option>January</option>
                <option>February</option>
                <option>March</option>
                <option>April</option>
                <option>May</option>
                <option>June</option>
                <option>July</option>
                <option>August</option>
                <option>September</option>
                <option>October</option>
                <option>November</option>
                <option>December</option>
            </select>
    
            <label for="amount">Amount</label>
            <input type="text" name="amount">

            <label for="cpfoa">Updated CPF Ordinary Account</label>
            <input type="text" name="cpfoa">

            <label for="cpfsa">Updated CPF Special Account</label>
            <input type="text" name="cpfsa">

            <label for="cpfms">Updated CPF Medishield Account</label>
            <input type="text" name="cpfms">
    
    
    
            <input class="button" type="submit" value="Submit">



        </form>
    </div>
</body>
</html>