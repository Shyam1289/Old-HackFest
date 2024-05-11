<?php
session_start();
include 'connect.php';
if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
    $Name = $_POST['name'];
    $contact = $_POST['contact'];
    $amount = $_POST['amount'];
    $interest = $_POST['interest'];
    $time = $_POST['time'];
    $checkEmail="SELECT * From lenders where email='$email'";
    $result=$conn->query($checkEmail);
    if($result->num_rows>0){
        $query = "UPDATE lenders SET Name='$Name', contact='$contact', lending_amount='$amount', interest='$interest', time='$time' WHERE email='$email'";
        $result = mysqli_query($conn, $query);
    if($result) {
        header("location: lender.php");
        exit(); 
    } else {
        echo "Error: " . mysqli_error($connection);
    }
     }
     else{
        $insertQuery="INSERT INTO lenders(Name,contact,email,lending_amount,interest,time)
                       VALUES ('$Name','$contact','$email','$amount','$interest','$time')";
            if($conn->query($insertQuery)==TRUE){
                header("location: lender.php"); 
            }
            else{
                echo "Error:".$conn->error;
            }
     }
}
else {
    header("Location: lender.php");
    exit();
}
?>
