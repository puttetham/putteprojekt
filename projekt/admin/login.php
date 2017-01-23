<?php
include('../includes/connect.php');

$error=''; //Variable to Store error message;

if(isset($_POST['submit'])){
if(empty($_POST['username']) || empty($_POST['password'])){
$error = "Username or Password is Invalid";
}
else
{

//Define $user and $pass
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

//Selecting Database
$db = mysqli_select_db($conn, "www.patrikhogler.se");
//sql query to fetch information of registerd user and finds user match.
$query = mysqli_query($conn, "SELECT * FROM login WHERE password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);
if($rows == 1){
  header("Location: welcome.php"); // Redirecting to other page
}
else
{
  $error = "Username of Password is Invalid";
}
  mysqli_close($conn); // Closing connection
}
}

?>
