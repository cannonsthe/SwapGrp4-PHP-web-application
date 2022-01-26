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
        <form style="text-align:center;margin-top:5px;margin-bottom:5px;">
            <a href="cpf_create.php">
            <input class="button" type="button" value="Add CPF record" /></a>
            
        </form>
        <div style="float:left;display:inline-block;">
            <h2 style="float:left;font-family:arial;font-size:18px;margin-top:5px;margin-bottom:2px;">Contribution History</h2>
            <h2 style="float:left;font-family:arial;font-size:18px;margin-top:5px;margin-left:155px;margin-bottom:2px;">Account Balance</h2>
        </div> 
        
        <div style="float:left;">
        <table>
            <tr>
                <td>

        <?php
            include 'connect.php';

        

            $stmt = $conn->prepare("SELECT fname,datepaid,month,amount FROM swaprj.cpf");
            $res = $stmt->execute();
            $stmt->bind_result($rfname,$rdatepaid,$rmonth,$ramount);
            $stmt->store_result();
            
            while($stmt->fetch()){
                echo "<div style=''>";
                echo "<table class='borders' style='display:inline-block;'><br>";
                echo "<tr><td class='data2'>"."Employee Name"."</td><td class='data'>".$rfname."</td></tr><tr><td class='data2'>"."Paid On"."</td><td class='data'>".$rdatepaid."</td></tr><tr><td class='data2'>"."Month"."</td><td class='data'>".$rmonth."</td></tr><tr><td class='data2'>"."Amount"."</td><td class='data'>".$ramount."</td></tr>";
                echo "</table>";
                echo "</div>";
                
            }
            
        ?>
        </td>
        <td>
       
        <?php
            include 'connect.php';

            $stmt = $conn->prepare("SELECT fname,cpfoa,cpfsa,cpfms FROM swaprj.user_information");
            $res = $stmt->execute();
            $stmt->bind_result($rfname,$rcpfoa,$rcpfsa,$rcpfms);
            $stmt->store_result();
            
            while($stmt->fetch()){
                echo "<table class='borders' style='display:inline-block;margin-left:20px;'><br><br>";
                echo "<tr><td class='data2'>"."Employee Name"."</td><td class='data'>".$rfname."</td></tr><tr><td class='data2'>"."Ordinary Account"."</td><td class='data'>".$rcpfoa."</td></tr><tr><td class='data2'>"."Special Account"."</td><td class='data'>".$rcpfsa."</td></tr><tr><td class='data2'>"."Medishield"."</td><td class='data'>".$rcpfms."</td></tr>";
                
                echo "</table>";
                
                echo "<div style='float:right;margin-left:5px;'><a href='cpf_update.php'>
                <input class='button' type='button' value='Edit CPF Record' /></a><br><br>
                <a href='cpf_delete.php'>
                <input class='button' type='button' value='Delete CPF record' /></a>
                </div>";
                
            }

            
        
        ?>
        
        </td>
        </tr>
        </table>

        
        
                
        </div>
        
    </div>
</body>
</html>