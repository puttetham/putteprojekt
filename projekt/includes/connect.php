<?php

// CONNECT TO LIVESERVER DATABASE
//$conn = mysqli_connect('patrikhogler-219303.mysql.binero.se', '219303_tj58553', 'patkanr1', '219303-patrikhogler');

// CONNECT TO LOCALHOST DATABASE
$conn = mysqli_connect('localhost', 'root', '', 'www.patrikhogler.se');

// SETS THE CLIENT CHARACTER SET
mysqli_query($conn, "SET NAMES utf8");


?>
