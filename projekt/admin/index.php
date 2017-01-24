
<?php
include("login.php"); // Include loginserv for checking username and password
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
<link rel="stylesheet" href="admin.css">
</head>
<body>
<div class="login">
<h1>Login</h1>
<form action="" method="post">
  <input type="text" placeholder="Username" id="user" name="username"><br/><br/>
  <input type="password" placeholder="Password" id="pass" name="password"><br/><br/>
  <input type="submit" value="Login" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>
</body>
</html>