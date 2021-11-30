<html>

<head>
    <title>PHP Website</title>
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>

    <!-- <div class="navbar navbar-light bg-light justify-content-end btn-toolbar">

            <button type="button" class="btn btn-outline-dark " href="login.php">Login</button>
            <button type="button" class="btn btn-outline-dark " href="feedback.php">Feedback</button>
            <button type="button" class="btn btn-outline-dark " href="about.php">About</button>
            <button type="button" class="btn btn-outline-dark " href="index.php">Home</button>

        </div> -->
    <ul class="navbar-nav ">
        <a class="navbar-brand mr-auto ">
            FRecords.co

        </a>
        <a class="navbar-brand ml-auto">
            <button type="button" class="btn btn-outline-dark navbar-btn" href="login.php">Login</button>
            <button onclick="myFunction()" type="button" class="btn btn-outline-dark navbar-btn">Feedback</button>
            <button type="button" class="btn btn-outline-dark navbar-btn" href="about.php">About</button>
            <button type="button" class="btn btn-outline-dark navbar-btn" href="index.php">Home</button>
        </a>

    </ul>

    <script>
        function myFunction(){
            location.href = "http://localhost:3000/feedback.php";
        }
    </script>
    



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>