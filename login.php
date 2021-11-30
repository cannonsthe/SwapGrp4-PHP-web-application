<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="HomePage.css">
</head>
<body>
    <div class="navbar">
       <a href="#" class="logo">FRecords</a>
       <div class="sections">
           <a href="index.php">Home</a>
           <a href="about.php" >About</a>
           <a href="#" class="active">Login</a>
           <a href="feedback.php">Feedback</a>
       </div>
    </div>
    <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Log In </h2>

    <!-- Icon -->
    
        <div class="fadeIn first" style="margin-left:45%;">
            <img src="http://assets.stickpng.com/images/585e4bf3cb11b227491c339a.png" id="icon" alt="User Icon" style="height:100px;" />
        </div>

        <!-- Login Form -->
        <div style="margin-left:42%;margin-top:5px;">
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="login"><br/>
                <input type="text" id="password" class="fadeIn third" name="login" placeholder="password" style="margin-top:5px;"><br/>
                <input type="submit" class="fadeIn fourth" value="Log In" style="margin-top:3px;margin-left:16%;">
            </form>
        </div>
  </div>
</div>

</body>
</html>