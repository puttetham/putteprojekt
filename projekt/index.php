<?php
   if (isset($_GET['page'])) {
   $p = $_GET['page'];

   switch ($p) {

    case 'home':
        include ('pages/home.php');
        break;

    case 'about':
        include ('pages/about.php');
        break;

    case 'portfolio':
        include ('pages/portfolio.php');
        break;

    case 'contact':
        include ('pages/contact.php');
        break;

    default:
        include ('pages/home.php');
        break;
   }
} else {
    include ('pages/home.php');
}
?>
