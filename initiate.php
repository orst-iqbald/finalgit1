<?php
ini_set('display_errors', 'On');
include 'connection.php';


if (!$mysqli->query("DROP TABLE IF EXISTS finaluser") ||
    !$mysqli->query("CREATE TABLE finaluser(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, username CHAR(255), password CHAR(255))"))
    echo "finaluser creation failed: (" . $mysqli->errno . ") " . $mysqli->error;

 
if (!$mysqli->query("DROP TABLE IF EXISTS finalusercountry") ||
    !$mysqli->query("CREATE TABLE finalusercountry(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, uid INT, country CHAR(255), FOREIGN KEY(uid) REFERENCES finaluser(id))"))
	echo "finalusercountry creation failed: (" . $mysqli->errno . ") " . $mysqli->error;
    
   
?>
