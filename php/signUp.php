<?php 
    require "config.php";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  	$sql = "SELECT * FROM Users";
    $ret = $conn->query($sql);
    if ($ret === TRUE) {
        echo "uploaded";
        echo "Connection Established";
    }

    $conn->close();
?> 

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<form>
  
</form>
</body>
</html>