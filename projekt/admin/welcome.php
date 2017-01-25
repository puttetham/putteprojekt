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
