<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("Location: index.php");
    }
    //echo $_SESSION['user'];
    $token = hash("sha256", uniqid(rand(), TRUE));
    $_SESSION['token'] = $token;
    $_SESSION['token_time'] = time();
    ?>