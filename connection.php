<?php

ini_set('display_errors', 'On');
include 'storedInfo.php';
$mysqli = new mysqli("oniddb.cws.oregonstate.edu", "iqbald-db", $myPassword, "iqbald-db");
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
  }
//else
 // {
  //  echo "Connection worked! <br>";
//  }

?>
