<?php

ini_set('display_errors', 'On');
session_start();
include 'connection.php';

$user = $_SESSION['valid_user'];
$out_country = $_GET["country"];


$mysqli->query("INSERT INTO finalusercountry(id, uid, country) VALUES ('NULL', (SELECT id FROM finaluser WHERE username = '$user'), '$out_country')");


//echo $out_country;

//header('location: members_only.php');
//echo $user;
?>
