<?php

// CONNECT TO LIVESERVER DATABASE
// $conn = mysqli_connect('patrikhogler-219303.mysql.binero.se', '219303_tj58553', 'patkanr1', '219303-patrikhogler');

// CONNECT TO LOCALHOST DATABASE
$conn = mysqli_connect('localhost', 'root', '', 'www.patrikhogler.se');

// SETS THE CLIENT CHARACTER SET
mysqli_set_charset ($conn , "utf8" );

// RETURNS THE TEXT OF THE ERROR MESSAGE FROM MySQL OPERATION
if (!$conn) {
    echo "Unable to connect to DB: " . mysqli_connect_error();
    exit;
}
?>
