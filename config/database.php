<?php
define('DB_HOST' , 'localhost');
define('DB_USER' , 'Marlon');
define('DB_PASS' , '123456');
define('DB_NAME' , 'SimpleWebForm');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if($conn->connect_error){
    die('Connection Failed' . $conn->connect_error);
}

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$issue = $_POST['issue'];
$comment = $_POST['comment'];

// database insert SQL code
$sql = "INSERT INTO `web_form` (name, email, issue, comment) VALUES ('$name', '$email', '$issue', '$comment')";

// insert in database 
$rs = mysqli_query($conn, $sql);
