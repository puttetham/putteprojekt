<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
   $p = $_GET['page'];


   switch ($p) {

    case 'home':
        include ('pages/home.php');
        break;

    case 'cv':
        include ('pages/about.php');
        break;

    case 'kontakt':
        include ('pages/contact.php');
        break;

    default:
        include ('pages/home.php');
        break; 
   }
?>
</body>
</html>
