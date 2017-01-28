<?php
session_start();

// IF PASSWORD CORRECT SESSION TO TRUE
if(isset($_POST['password'])) {
if($_POST['password'] == 'patrik') {
$_SESSION['admin'] = TRUE;
}
}
// LOGOUT
if(isset($_POST['logout'])) {
unset($_SESSION['admin']);
}

// IF LOGGED IN RUN
if(isset($_SESSION['admin'])) {
require_once '../includes/connect.php';
if ( isset($_POST['content']) ) {

$content = $_POST['content'];
$text = mysqli_real_escape_string($conn, $content);
$page = $_POST['page'];

$query = "UPDATE text_table
  SET text_content = '$text'
  WHERE page = '$page'
";
mysqli_query($conn, $query);
}

//PRINT TEXT IN TEXTAREAS
$text_array = array();

$query = "SELECT text_content
FROM text_table
";

$result = mysqli_query($conn, $query);
while ( $row = mysqli_fetch_array ($result) ) {
array_push($text_array, $row['text_content']);
}

// load site with textboxes on welcome.php
if ( isset($_GET['page']) ) {
$page = $_GET['page'];
include ($page . '.php');
}
else {
include 'welcome.php';
}

echo "
<form method='post' action=''>
<input type='submit' name='logout' value='Log out' id='logout'>
</form>
";
}
else {
echo "

<form method='post'>
<input type='password' name='password'>
<input type='submit' value='Logga in'>
</form>
</div>
";
}

?>
