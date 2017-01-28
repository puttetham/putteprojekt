<?php

include('includes/connect.php');

//DEFINA IF VARIABLE IS SET
if  (isset($_POST['name'])
    && isset($_POST['email'])
    && isset($_POST['tel'])
    && isset($_POST['message']))
{

// SQL INJECTIONS
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$tel = mysqli_real_escape_string($conn, $_POST['tel']);
$message = mysqli_real_escape_string($conn, $_POST['message']);

// INSERT INTO DATABASE
$query =  "INSERT into contacts (id, name, email, tel, message)
           VALUES (NULL, '$name', '$email', '$tel', '$message')
          ";

// SENDS A MYSQL QUERY
mysqli_query($conn, $query);

// REFRESH TO ECHO 3SEC AND THEN REDIRECT TO HOME SITE
header("Refresh: 3; index.php");
echo "<h2><br>Thank you! I will come back to you as soon as possible.</h2>";
}

?>
