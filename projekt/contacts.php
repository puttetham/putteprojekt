<?php
include('includes/connect.php');

if  (isset($_POST['name'])
&& isset($_POST['email'])
&& isset($_POST['tel'])
&& isset($_POST['message'])) {

if($_POST['name'] != ""
&& $_POST['email'] != ""
&& $_POST['tel'] != ""
&& $_POST['message'] != "") {
$name = mysqli_real_escape_string($conn, $_POST['name']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$tel = mysqli_real_escape_string($conn, $_POST['tel']);
$message = mysqli_real_escape_string($conn, $_POST['message']);
$sql_store = "
INSERT into contacts (id, name, email, tel, message)
VALUES (NULL, '$name', '$email', '$tel', '$message')
";
$sql = mysqli_query($conn, $sql_store) or die(mysql_error());
header('Location: ?nav=messagesuccess');
}
} else {
include ('pages/home.php');
//echo "<h1><br>Thank you for contacting me, i will come back to you as soon as possible.</h1>";
}

?>
