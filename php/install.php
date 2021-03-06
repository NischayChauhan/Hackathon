<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try {
    $connection = new PDO("mysql:host=$servername", $username, $password, $options);
    $sql = file_get_contents("../sql/init.sql");
    $connection->exec($sql);
    
    echo "Database and table created successfully.";
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}
?>