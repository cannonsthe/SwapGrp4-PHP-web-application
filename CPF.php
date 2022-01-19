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
           <a href="#" class="active">CPF Contributions</a>
           <a href="feedback.php">Feedback</a>
           <a href="index.php">Logout</a>
       </div>
    </div>

    <div class="container">
        <h1 style="text-align:center;font-family:arial;font-size:35;margin-bottom:0px;">CPF Contributions</h1>
        <div style="float:left;display:inline-block;">
            <h2 style="float:left;font-family:arial;font-size:18px;margin-top:5px;margin-left:340px;margin-bottom:2px;">Contribution History</h2>
            <h2 style="float:left;font-family:arial;font-size:18px;margin-top:5px;margin-left:155px;margin-bottom:2px;">Account Balance</h2>
        </div> 
        <div style="float:left;">
          
            <table class="borders" style="margin-left:290px;float:left;">
                <tr>
                    <td class="data2">Employee Name</td> 
                    <td class="data">Larry</td>
                </tr>

                <tr>
                    <td class="data2">Paid on</td> 
                    <td class="data">1st Dec 2021</td>
              
                </tr>

                <tr>
                    <td class="data2">Month</td> 
                    <td class="data">October</td>
                </tr>

                <tr>
                    <td class="data2">Amount</td> 
                    <td class="data">$700 SGD</td>
                </tr>
            </table>
            
            <table class="border" style="display:inline-block;margin-left:25px;">
                <tr>
                    <td class="data2">Ordinary Account</td> 
                    <td class="data">$10,752 SGD</td>
                </tr>

                <tr>
                    <td class="data2">Special Account</td> 
                    <td class="data">$734.65 SGD</td>
                </tr>
            </table><br>
            <div style="text-align:center;">
                <a href="CPF_CRUD.php">
                    <input type="button" value="Edit CPF" />
                </a>
            </div>
        </div>
    </div>
</body>
</html>