<?php
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";


$conn = mysqli_connect($servename, $username, $password, $dbname);

if (!$conn) {
    die("connection  Failed" . mysqli_connect_error());
}