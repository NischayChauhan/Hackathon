<?php

/**
 * Configuration for database connection
 *
 */

$servername       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "hackathon";
$dsn        = "mysql:host=$servername;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );