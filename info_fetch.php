<?php
// Start the session
session_start();

// Check if the user is logged in
if(isset($_SESSION['email'])) {
    // Retrieve the first name from the session
    $sql="SELECT * FROM users WHERE email='$email'";
   $result=$conn->query($sql);
    
    // Output the first name
    echo "Hello, $firstName!";
} else {
    // Output a message if the user is not logged in or first name is not set
    echo "User not logged in or first name not found.";
}
?>
