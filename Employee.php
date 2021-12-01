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

    <strong><p style="font-size:40px;margin-left:36%;">Employee Information</p><strong>

    <div class="container">
        <img src="/pictures/EmployeeInformation_UserInformation.png" id="icon" alt="User Icon" style="width:250px; margin-left:40%" />
        <form>
            <strong><label for="name" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">Full Name</label></strong>
            <input type="text" disabled class="form-control" id="Full Name">
            </br>
            <strong><label for="password" style="margin: 5px auto 0px auto;font-size: 20px;">Password</label></strong>
            <input type="text" disabled class="form-control" id="Password" >
            </br>
            <strong><label for="email" style="margin: 5px auto 0px auto;font-size: 20px;">Email</label></strong>
            <input type="text" disabled class="form-control" id="Email" >
            </br>
            <strong><label for="department" style="margin: 5px auto 0px auto;font-size: 20px;">Department</label></strong>
            <input type="text" disabled class="form-control" id="Departmen" >
            </br>
            <strong><label for="position" style="margin: 5px auto 0px auto;font-size: 20px;">Position</label></strong>
            <input type="text" disabled class="form-control" id="Position" >
            </br>
            <strong><label for="accountbank" style="margin: 5px auto 0px auto;font-size: 20px;">Account Bank</label></strong>
            <input type="text" disabled class="form-control" id="Account Bank" >
            </br>
            <strong><label for="accountnumber" style="margin: 5px auto 0px auto;font-size: 20px;">Account Number</label></strong>
            <input type="text" disabled class="form-control" id="Account Number" >
            
        </form>
    </div>
    



</body>
</html>