<?php
# CONNECT TO MySQL DATABASE.

$link = mysqli_connect('localhost','root','','webtech_products_db');

if (!$link) {
    die('Could not connect to MySQL: ' . mysqli_error($link));
}

?>
