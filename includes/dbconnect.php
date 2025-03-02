<?php
$hostname = "localhost";
$database = "tonupodx_v2"; 
$username = "tonupodx_v2";
$password = "6*6e*79Zrm%v";

try {
   $conn = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $connection_status = "<div class='success'>Connected successfully!</div>";
} catch(PDOException $e) {
   $connection_status = "<div class='error'>Connection failed: " . $e->getMessage() . "</div>";
}
?>

