<?php
ini_set('display_errors', 'On');

session_start();

include 'connection.php';
/*
if(isset($_SESSION['valid_user'])){
echo $_SESSION['valid_user'];
$user=$_SESSION['valid_user'];


$result = $mysqli->query("SELECT C.country
FROM finalusercountry C
INNER JOIN finaluser U ON U.id=C.uid
WHERE U.username ='$user'");
if($result->num_rows>0){
echo '<table id=table1>';
$i=0;
while($row = $result->fetch_assoc()){
	$countryinput = $row["country"];
	$cinumber = $countryinput.$i;
	echo '<tr>';
	//echo '<td>' .$cinumber. '</td>';
	echo '<td>' .$row["country"].'</td>';
	echo '<td> <button id='.$countryinput.' onclick=countryStats(this.id)> Get Stats </button> </td>';
	echo '<td> <div id ='.$cinumber.' ></div></td>'; 
	echo '</tr>';
}
echo '</table>';
}
*/
echo '<!DOCTYPE html>';
echo '<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Country Capitals</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css2/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="css2/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
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
          <a class="brand"> Country Capitals! </a>
          <div class="nav-collapse collapse">

            <ul class="nav">
              <li class="active"><a href="final.html">Introduction</a></li>
              <li><a href="members_only.php">Your Countries</a></li>
              <li><a href="mapexample.php">Maps!</a></li>
              <li><a href="share.php">Share</a></li>
              <li><a href="share_results.php">See whats shared</a></li>
              <li><a href="logout.php">Log Out</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>';
echo '<div class="container">';

if(isset($_SESSION['valid_user'])){
echo 'Hello '.$_SESSION['valid_user']. ' Your Country Capitals are at a touch of a button!';
echo '<p>';
$user=$_SESSION['valid_user'];


$result = $mysqli->query("SELECT C.country
FROM finalusercountry C
INNER JOIN finaluser U ON U.id=C.uid
WHERE U.username ='$user'");
//echo '<table id=table1>';
//if($result->num_rows>0){
echo '<table id=table1>';
$i=0;
while($row = $result->fetch_assoc()){
        $countryinput = $row["country"];
        $cinumber = $countryinput.$i;
        echo '<tr>';
        //echo '<td>' .$cinumber. '</td>';
        echo '<td>' .$row["country"].'</td>';
        echo '<td> <button id='.$countryinput.' onclick=countryStats(this.id)> Get Capital </button> </td>';
        echo '<td> <div id ='.$cinumber.' ></div></td>';
        echo '</tr>';
}
echo '</table>';
//}








echo '<p> Add a country to your Country Capitals account </p>';
echo '<form id="myForm">';// action="add_country.php" method="GET">';
echo '<div id="myList">Select the Country </div>';
echo '<button type="button" onclick=addCountry(form[0].value)> Add Country </button>';
echo '</form>';
echo '</div>';
echo '<script src="final.js"></script>';
echo '<script type="text/javascript"></script>';



echo '</body>';
echo '</html>';


}
else
{
echo '<p> You are not logged in </p>';
echo '<p> Only logged in members can see this page </p>';
echo '<a href="final.html"> Back to main page </a>';
}
?>


