<?php
    session_start();
    session_destroy();
    unset($_SESSION['username']);
    $_SESSION['message']="You are Logged out";
    header("location:Admin.html");

?>