<?php
   $p = $_GET['page'];


   switch ($p) {

    case 'home':
        include ('pages/home.php');
        break;

    case 'about':
        include ('pages/about.php');
        break;

    case 'contact':
        include ('pages/contact.php');
        break;

    default:
        include ('pages/home.php');
        break; 
   }
?>

