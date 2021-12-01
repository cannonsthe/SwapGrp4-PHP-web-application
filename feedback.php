<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="HomePage.css">
    <link rel="stylesheet" href="FeedbackPage.css">
</head>

<body>
    <div class="navbar">
       <a href="#" class="logo">FRecords</a>
       <div class="sections">
           <a href="index.php" >Home</a>
           <a href="about.php" >About</a>
           <a href="login.php" >Login</a>
           <a href="#" class="active">Feedback</a>
       </div>
    </div>
    <br><br>
    <div class="container">
  <form action="action_page.php">

    <label for="fname">Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name">
    <label for="lname">Email</label>
    <input type="text" id="lname" name="lastname" placeholder="Your email">
    <label for="subject">Subject</label>
    <input type="text" id="subject" name="subject" placeholder="Subject">
    <label for="feedback">Feedback</label>
    <textarea id="feedback" name="feedback" placeholder="Feedback" style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>

</body>
</html>