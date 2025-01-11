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

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Database Connection Status</title>
   <style>
       body {
           font-family: Arial, sans-serif;
           margin: 0;
           padding: 20px;
           background: #f4f4f4;
       }
       .container {
           max-width: 800px;
           margin: 0 auto;
           background: white;
           padding: 20px;
           border-radius: 8px;
           box-shadow: 0 0 10px rgba(0,0,0,0.1);
       }
       .success {
           color: green;
           padding: 10px;
           background: #e8f5e9;
           border-radius: 4px;
           margin: 10px 0;
       }
       .error {
           color: red;
           padding: 10px;
           background: #ffebee;
           border-radius: 4px;
           margin: 10px 0;
       }
       h1 {
           color: #333;
           margin-bottom: 20px;
       }
   </style>
</head>
<body>
   <div class="container">
       <h1>Database Connection Status</h1>
       <?php echo $connection_status; ?>
       
       <div class="details">
           <h2>Connection Details:</h2>
           <p>Host: <?php echo $hostname; ?></p>
           <p>Database: <?php echo $database; ?></p>
           <p>Username: <?php echo $username; ?></p>
           <p>Time: <?php echo date('Y-m-d H:i:s'); ?></p>
       </div>
   </div>
</body>
</html>