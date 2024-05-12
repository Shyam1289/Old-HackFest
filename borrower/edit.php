<?php
session_start();
include 'connect.php';
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $address = $_POST['address'];
    $business = $_POST['business'];
    $annual_income = $_POST['income'];
    $collateral = $_POST['collateralName'];
    $collateral_val = $_POST['collateralValue'];
    $contact = $_POST['contact'];
    $query = "UPDATE users SET firstName='$fName', lastName='$lName' , address='$address', contact='$contact' WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if($result) {
        header("location: lender.php");
        exit(); 
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
else {
    header("Location: lender.php");
    exit();
}
?>
