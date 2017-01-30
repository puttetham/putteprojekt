<?php
  session_start();
  include ('login.php');

  ////// IF PASSWORD CORRECT SESSION TO TRUE
  if(isset($_POST['password'])) {
    if($_POST['password'] == 'patriK') {
      $_SESSION['admin'] = TRUE;
    }
  }

  ////// LOGOUT
  if(isset($_POST['logout'])) {
    unset($_SESSION['admin']);
  }

  ////// IF LOGGED IN RUN
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

        ////// PRINT TEXT IN TEXTAREAS
        $text_array = array();

        $query = "SELECT text_content
        FROM text_table
        ";

        $result = mysqli_query($conn, $query);
        while ( $row = mysqli_fetch_array ($result) ) {
        array_push($text_array, $row['text_content']);
        }

        ////// LOAD SITE WITH TEXTBOXES ON WELCOME.PHP
        if ( isset($_GET['page']) ) {
            $page = $_GET['page'];
            include ($page . '.php');
            } else {
            include 'welcome.php';
            }

        ///// LOGOUT BUTTON WHEN ENTERING ADMIN
        echo "
        <form method='post' action=''>
        <input type='submit' name='logout' value='Log out' id='logout'>
        </form>
        ";
        }

        else {

        ///// ON LOGOUT ONLY SHOW LOGIN
        echo "
        <form method='post' id='login'>
        <input type='password' name='password' id='password'>
        <input type='submit' value='Logga in' id='loggain'>
        </form>
        </div>
        ";
      }

?>
