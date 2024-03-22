<?php
$servername = "sql109.ezyro.com";
$username = "ezyro_36171478";
$password = "0c39ca18e";
$dbname = "ezyro_36171478_userdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
