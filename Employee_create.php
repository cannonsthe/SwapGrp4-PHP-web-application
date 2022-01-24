<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Information</title>
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

    <strong><p style="font-size:40px;margin-left:33%;">Add Employee Information</p><strong>
    
    <div class="container">
        <form action="Employee_create.php" method="post">
            <img src="/pictures/EmployeeInformation_UserInformation.png" id="icon" alt="User Icon" style="width:250px; margin-left:40%" />
            </br>    
            <strong><label for="userid" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">User ID</label></strong>
            <input type="text" class="form-control" name="userid">
            </br>
            <strong><label for="fname" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">Full Name</label></strong>
            <input type="text" class="form-control" name="fname">
            </br>
            <strong><label for="w_email" style="margin: 5px auto 0px auto;font-size: 20px;">Work Email</label></strong>
            <input type="text" class="form-control" name="w_email" >
            </br>
            <strong><label for="department" style="margin: 5px auto 0px auto;font-size: 20px;">Department</label></strong>
            <input type="text" class="form-control" name="department" >
            </br>
            <strong><label for="position" style="margin: 5px auto 0px auto;font-size: 20px;">Position</label></strong>
            <input type="text" class="form-control" name="position" >
            </br>
            <strong><label for="password" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">Password</label></strong>
            <input type="text" class="form-control" name="password">
            </br>
            <strong><label for="bankname" style="margin: 5px auto 0px auto;font-size: 20px;">Bank Name</label></strong>
            <input type="text" class="form-control" name="bankname" >
            </br>
            <strong><label for="bankaccount" style="margin: 5px auto 0px auto;font-size: 20px;">Bank Account</label></strong>
            <input type="text" class="form-control" name="bankaccount" >
            </br>
            <strong><label for="cpfoa" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">CPF Ordinary Account</label></strong>
            <input type="text" class="form-control" name="cpfoa">
            </br>
            <strong><label for="cpfsa" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">CPF Special Account</label></strong>
            <input type="text" class="form-control" name="cpfsa">
            </br>
            <strong><label for="cpfms" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">CPF Medishield Account</label></strong>
            <input type="text" class="form-control" name="cpfms">
            </br>
            <strong><label for="p_email" style="margin: 0px auto 0px auto;font-size: 20px;margin-bottom:0px;">Personal Email</label></strong>
            <input type="text" class="form-control" name="p_email">
            </br>
            <input type="submit"  value="Submit">
        </form>
    </div>

</body>
</html>