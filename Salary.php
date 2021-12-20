<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary</title>
    <link rel="stylesheet" href="Salary.css">
</head>
<body>

    <div class="navbar">   <!--Navigation bar-->
       <a href="#" class="logo">FRecords</a>
       <div class="sections">                                        <!--Different sections and links to the pages-->
           <a href="Employee.php" >Employee Information</a>
           <a href="#" class="active">Employee Salary</a>
           <a href="Expenses.php" > General Expenses</a>
           <a href="CPF.php">CPF Contributions</a>
           <a href="feedback.php">Feedback</a>
           <a href="index.php">Logout</a>
       </div>
    </div>

    <h1>Salary Records</h1>
    <p class="warning">These records are strictly confidential. Do not distribute or share without permission.Violators will be punished!</p>

       <table class="salary">      <!--Table-->
           <tr>
              <td>Name</td> 
              <td>Salary</td>
              <td>Position</td>
              <td>Id No.</td>
            </tr>

           <tr>
              <td>Alex Tay</td> 
              <td>$76,000 SGD</td>
              <td>Finance Manager</td>
              <td>29891746</td>
           </tr>

           <tr>
              <td>Mary Kiat</td> 
              <td>$78,000 SGD</td>
              <td>Pricing Analyst</td>
              <td>44568973</td>
            </tr>

           <tr>
              <td>Eng Lai Fa</td> 
              <td>$220,000 SGD</td>
              <td>Finance Director</td>
              <td>78635468</td>
           </tr>
        </table>

        <form>    <!--Execute the function Salary2() when user clicks on the Add Salary Records-->
             <input type="button" class="AddBtn" value="Add Salary Records" onclick= "Salary2()">
        </form>

         <!--Salary2() that redirects user to Salary_Add page-->
        <script>                             
            function Salary2(){
               location.href="Salary_Add.php"
            }
        </script>
</body>
</html>