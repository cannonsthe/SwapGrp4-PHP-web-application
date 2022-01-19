<?php
include 'connect.php';

$feedbackid = $_POST['feedbackid'];
$userid = $_POST['userid'];
$fname = $_POST['fname'];
$subject = $_POST['subject'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];
$department = $_POST['department'];



//$method = $_SERVER['REQUEST_METHOD'];

//$query="INSERT INTO swaprj.cpf (fname,email,subject,feedback)" .
     //"VALUES (?, ?, ?, ?);";
     //$result=mysqli_query($con,$query);
     //if(!$result){
        //echo ("INSERT Failed<br>");
        //echo mysqli_error($con). "<br>";
     //}
     //else{
         //echo "INSERT OK<br>";
     //}

     $stmt = $conn->prepare("INSERT into feedback VALUES(?,?,?,?,?,?,?)");
     $stmt->bind_param("iisssss", $feedbackid,$userid, $fname, $subject, $email, $feedback, $department);
     $res = $stmt->execute();
     if($res){
         echo "Insert successful";
     }else
        echo "Unable to insert";

?>