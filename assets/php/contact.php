<?php

$hostname = "localhost";
$username = "uche";
$password = "Emmanuel3!";
$db = "form";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if($dbconnect != false){
    echo "No Problem!";
}

if($dbconnect->connect_error) {
    
    die("Database connection failed: " . $dbconnect->connect_error);
}
echo "<pre />"; 
print_r($_POST);


if(isset($_POST)) {
  
    $name = $_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $query = "INSERT INTO `form_data` (`name`, `email`, `message`) VALUES ('$name','$email', '$message')";
    
    if (mysqli_query($dbconnect, $query)) {
        echo "Order received, will get back to you soon.";
    }else{
        mysqli_error($dbconnect);
        echo $message;
        echo $email;
        die('An error occured. Your order was not submitted.');
    }
}

?>