<?php
$con = mysqli_connect("localhost","root","","swaprj"); //connect to database
if (!$con){
    die('Could not connect: ' . mysqli_connect_errno()); //return error is connect fail
}

$fname = $_REQUEST['fname'];
$email = $_REQUEST['email'];
$department = $_REQUEST['department'];
$dateregistered = $_REQUEST['dateregistered'];
$position = $_REQUEST['position'];
$password = $_REQUEST['password'];
$bankname = $_REQUEST['bankname'];
$accountnumber = $_REQUEST['accountnumber'];
$cpfoa = $_REQUEST['cpfoa'];
$cpfsa = $_REQUEST['cpfsa'];
$cpfbalance = $_REQUEST['cpfbalance'];
$method = $_SERVER['REQUEST_METHOD'];

$query="INSERT INTO swaprj.cpf (fname,email,department,dateregistered,position,password,bankname,accountnumber,cpfoa,cpfsa,cpfbalance)" .
     "VALUES ('$fname', '$email', '$department', '$dateregistered', '$position', '$password', '$bankname', '$accountnumber', '$cpfoa', '$cpfsa', '$cpfbalance');";
     $result=mysqli_query($con,$query);
     if(!$result){
        echo ("INSERT Failed<br>");
        echo mysqli_error($con). "<br>";
     }
     else{
         echo "INSERT OK<br>";
     }
?>
<!--- div class="container">
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
    </div --->