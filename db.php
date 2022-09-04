<?php 
session_start();
ini_set('display_errors',E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "themart";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $conn;
?>