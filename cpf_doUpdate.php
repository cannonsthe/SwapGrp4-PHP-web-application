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
    <div class="container">
    <?php

        include 'connect.php';

        
        $fname=$_POST['fname'];
        $datepaid=$_POST['datepaid'];
        $month=$_POST['month'];
        $amount=$_POST['amount'];
        $cpfoa=$_POST['cpfoa'];
        $cpfsa=$_POST['cpfsa'];
        $cpfms=$_POST['cpfms'];
        $cpfid=$_POST['cpfid'];

        $stmt = $conn->prepare("UPDATE swaprj.cpf SET fname=?, datepaid=?, month=?, amount=?, cpfoa=?, cpfsa=?, cpfms=? WHERE cpfid=?");
            		$stmt->bind_param("sssssssi", $fname, $datepaid, $month, $amount, $cpfoa, $cpfsa, $cpfms, $cpfid);
            		$res = $stmt->execute();
            		if($res){
                		
                        echo "<h1 style='text-align:center;'>Update Successful";
                        echo "<form style='text-align:center'>";
                        echo "<a href='CPF.php'><input class='button' type='button' name='CPF' value='Return to CPF'/></a>";
                        echo "</form>";
            		}else
                		echo "Unable to update";

            
    ?>
        
    </div>
</body>
</html>