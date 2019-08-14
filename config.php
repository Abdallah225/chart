<?php
//--------- YOUR MYSQL CONNECTION SETTINGS
$servername = "localhost";
$database = "graphe";
$username = "root";
$password = "";
$datepost = date("Y-m-d");
$ip = $_SERVER['REMOTE_ADDR'];
$domain = $_SERVER['SERVER_NAME'];
$browser = $_SERVER['HTTP_USER_AGENT'];
$server = $_SERVER['PHP_SELF'];
$path = pathinfo($server);
$current_file = $path['basename'];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo $server;
//mysqli_close($conn);
?>
