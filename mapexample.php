<?php


ini_set('display_errors', 'On');
session_start();
include 'connection.php';


if(isset($_SESSION['valid_user'])){
$user=$_SESSION['valid_user'];


$result = $mysqli->query("SELECT C.country FROM finalusercountry C INNER JOIN finaluser U ON U.id=C.uid WHERE U.username ='$user'");

echo '<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="utf-8">
  <title>Your Map </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css2/bootstrap.css" rel="stylesheet">

  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="gmaps.js"></script>
  <style type="text/css">
    #map {
      width: 400px;
      height: 400px;
    }
  </style>
  <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
  </style>
    <link href="css2/bootstrap-responsive.css" rel="stylesheet">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">


</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand">Country Capitals</a>
          <div class="nav-collapse collapse">

            <ul class="nav">

              <li class="active"><a href="final.html">Introduction</a></li>
              <li><a href="members_only.php">Your Countries</a></li>
              <li><a href="mapexample.php">Maps!</a></li>
              <li><a href="share.php">Share</a></li>
              <li><a href="share_results.php">See whats shared</a></li>
              <li><a href="logout.php">Log Out</a></li>

          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div class = "container">



  <script src= map.js>
  </script>';
echo 'Your countries are in the drop down below. Change the drop down to see the Map of each country';
echo '<form>';
if($result->num_rows > 0){
echo '<select id="country" onchange="mapfunction(this.value)">';
while($row = $result->fetch_assoc()){
        echo '<option value = '.$row["country"].'>' .$row["country"].'</option>';
        }
}
echo '</select>';
echo '</form>';
echo '<div id="map"></div>';
echo '<div>';
echo '</body>
</html>';



}


?>



