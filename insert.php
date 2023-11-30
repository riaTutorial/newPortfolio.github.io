<?php
include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$query = "insert into contact_form set
Name='".$name."',
Email='".$email."',
Subject='".$subject."',
Message='".$message."'";

if(mysqli_query($conn,$query))
    {
        echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Thank you for contacting me. I will get back to you as soon as possible!</h1>
        <p class="back">Go back to the <a href="index.php">homepage</a>.</p>
        
    </div>
</body>
</html>';
        
    }

else
    {
        echo "<script> alert('Data Not Inserted')</script>";
        header("location:index.php");  //redirection of page
    }

?>

