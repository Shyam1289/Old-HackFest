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
    $query = "UPDATE users SET firstName='$fName', lastName='$lName' , address='$address', annual_income='$annual_income' , collateral= '$collateral', collateral_val='$collateral_val', contact='$contact', occupation='$business' WHERE email='$email'";
    $result = mysqli_query($conn, $query);
    if($result) {
        header("location: borrower.php");
        exit(); 
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
else {
    header("Location: borrower.php");
    exit();
}
?>
