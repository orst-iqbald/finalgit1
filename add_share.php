<?php

ini_set('display_errors', 'On');
session_start();
include 'connection.php';

$user = $_SESSION['valid_user'];
$share_user = $_GET["sharename"];


$mysqli->query("INSERT INTO finalusershare(uid, sid) VALUES ((SELECT id FROM finaluser WHERE username = '$user'), (SELECT id FROM finaluser WHERE username = '$share_user'))");

header('location: share_results.php');

?>
