<?php
    // Start session
    // session_start();

    // Include the files needed
    include 'connect.php';

    // Check if the user is logged in
    if(isset($_SESSION['email'])) {
        // Get the email from the session
        $email = $_SESSION['email'];

        // Prepare the SQL query to select the first name based on email
        $query = "SELECT * FROM users WHERE email = '$email'";

        // Execute the query
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if($result) {
            // Fetch the first row from the result
            $row = mysqli_fetch_assoc($result);

            // Get the first name from the row
            $contact = $row['contact'];
            // $lastName=$row['lastName'];
            // Output the first name
            echo "$contact";
        } else {
            // If the query fails, display an error message
            echo "Error: " . mysqli_error($connection);
        }
    } else {
        // If the user is not logged in, redirect them to the login page or handle appropriately
        header("Location: login.php");
        exit();
    }
?>

