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
           <a href="index.php">Logout</a>
       </div>
    </div>

    <h1>Employee Information</h1>

    <div class="container">
        <img src="/pictures/EmployeeInformation_UserInformation.png" id="icon" alt="User Icon" style="width:250px; margin-left:40%" />
        <form>
            <label for="name" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">Full Name</label>
            <input type="text" disabled class="form-control" id="fullname">
            </br>
            <label for="name" style="margin: 5px auto 0px auto;font-size: 20px;">Last Name</label>
            <input type="text" disabled class="form-control" id="fullname" >
        </form>
    </div>
    



</body>
</html>