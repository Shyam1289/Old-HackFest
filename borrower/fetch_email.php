<?php
    // Start session
    // session_start();  //not needed --> session already started

    // Include the files needed
    include 'connect.php';

    // Check if the user is logged in
    if(isset($_SESSION['email'])) {
        // Get the email from the session
        $email = $_SESSION['email'];
        echo "$email ";
    } else {
        // If the user is not logged in, redirect them to the login page or handle appropriately
        header("Location: login.php");
        exit();
    }
?>
