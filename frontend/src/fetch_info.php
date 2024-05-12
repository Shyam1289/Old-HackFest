<?php
// Connect to your database (replace with your database credentials)
$host="localhost"; 
$user="root"; 
$pass=""; 
$db="login"; 
$conn=new mysqli($host,$user,$pass,$db); 
if($conn->connect_error){ 
    echo "Failed to connect DB".$conn->connect_error; 
} 

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch name, email, and contact from the database
$sql = "SELECT name, email, contact FROM lenders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Convert the result into an associative array
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    
    // Output the data as JSON
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    echo "No data found";
}
$conn->close();
?>
