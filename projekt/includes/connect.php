<?php
$conn = mysqli_connect('localhost', 'root', '', 'www.patrikhogler.se');

        mysqli_set_charset ($conn , "utf8" );
        mysqli_query($conn, 'SET NAMES utf8');


if (!$conn) {
die('Connection failed: ' . mysqli_connect_error());
}
?>
