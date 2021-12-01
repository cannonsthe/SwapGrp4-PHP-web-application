<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="HomePage.css">
  <link rel="stylesheet" href="LoginPage.css">
</head>

<body>
  <div class="navbar">
    <a href="#" class="logo">FRecords</a>
    <div class="sections">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="#" class="active">Login</a>
      <a href="feedback.php">Feedback</a>
    </div>
  </div>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
      <h2 class="active"> Login </h2>

      <!-- Icon -->

      <div class="fadeIn first">
        <img src="/pictures/usericon.png" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <div>
        <form>
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="login"><br />
          <input type="text" id="password" class="fadeIn third" name="login" placeholder="password"><br />
          <input type="submit" class="fadeIn fourth" value="Login">
        </form>
      </div>
    </div>
  </div>

</body>

</html>