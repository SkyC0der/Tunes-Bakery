<?php

$username = "be1062c4c97791";//username;
$password = "346e04df"; //password;
$hostname = "us-cdbr-east-02.cleardb.com" ;//hostname;
$db = "heroku_09b04fd98218dc4";


$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if($dbconnect->connect_error) {
    
    die("Database connection failed: " . $dbconnect->connect_error);
}


if(isset($_POST)) {
  
    $name = $_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $query = "INSERT INTO `form-database` (`name`, `email`, `message`) VALUES ('$name','$email', '$message')";
    
    if (mysqli_query($dbconnect, $query)) {
        echo "Thank you! We will get back to you soon.";
    }else{
        mysqli_error($dbconnect);
        die('An error occured. Your order was not submitted.');
    }
}

?>