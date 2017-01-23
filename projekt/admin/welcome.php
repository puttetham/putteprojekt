<?php
include("login.php"); // Include loginserv for checking username and password
?>

<?php
if ( isset($_POST['content']) ) {

    $content = $_POST['content'];
    $text = mysql_real_escape_string($content);
    $page = $_POST['page'];

    $query = "UPDATE text_table
            SET text_content = '$text'
            WHERE page = '$page'
    ";
    mysqli_query($conn, $query);
}

$text_array = array();

$query = "SELECT text_content
        FROM text_table
";

$result = mysqli_query($conn, $query);
while ( $row = mysqli_fetch_array ($result) ) {
    array_push($text_array, $row['text_content']);
}


 ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>ADMIN PAGE</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
<link rel="stylesheet" href="admin.css">
</head>
<body>
  <h1>Welcome Patrik</h1>
  <br>
  <h2>Home</h2>
  <form method="post">
      <input name="page" type="hidden" value="homeinfo">
      <textarea name="content" class="admin-textarea"><?php echo $text_array[2]; ?></textarea>
      <br>
      <input type="submit"></input>
  </form>


  <h2>Current job</h2>
  <form method="post">
      <input name="page" type="hidden" value="about_me1">
      <textarea  name="content" class="admin-textarea"><?php echo $text_array[1]; ?></textarea>
      <br>
      <input type="submit"></input>
  </form>

  <h2>Current education</h2>
  <form method="post">
      <input name="page" type="hidden" value="about_me">
      <textarea  name="content" class="admin-textarea"><?php echo $text_array[0]; ?></textarea>
      <br>
      <input type="submit"></input>
  </form>
<br><br><br>
</body>
</html>
