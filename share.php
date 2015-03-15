<?php


ini_set('display_errors', 'On');

session_start();

include 'connection.php';


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

echo '<p> If you want to share your countries, enter in the username of the person whom you would like to share with. Remember to enter in the correct username since an incorrect username will show you no results. </p>';
echo '<form action="add_share.php" method="GET">';
echo 'Share with: <input type="text" name="sharename">';
echo '<br> <input type="submit" value="Submit">';
echo '</form>';
}

echo '</div>';
echo '</body>';
echo '</html>';

?>
