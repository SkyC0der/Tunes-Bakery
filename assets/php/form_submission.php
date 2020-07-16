<?php

$hostname = "localhost";
$username = "caspero";
$password = "uchechukwu";
$db = "PWEETY_BAKES";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if($dbconnect->connect_error) {
    die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['submit'])) {
    $email=$_POST['email'];
    $message=$_POST['message'];

    $query = "INSERT INTO `ORDERS` (`email`, `message`) VALUES ('{$email}', '{$message}')";

    if (!mysqli_query($dbconnect, $query)) {
        die('An error occured. Your order has not been submitted.');
    } else {
        echo "Order received, will get back to you soon.";
    }
}

?>



