<?php
include 'connection.php';

$out_username = $_POST["username"];
$out_password = $_POST["password"];



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
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>';
echo '<div class="container">';




if(!$out_username || !$out_password ){
  echo "you need to enter in all required details";
  exit;
}

//see if duplicates exist. If not then add username to database
$result = $mysqli->query("SELECT * FROM finaluser WHERE username = '".$out_username."'");
if($result->num_rows > 0)
{
  echo "username is taken, go back and create another";
}
else
{
  $mysqli->query("INSERT INTO finaluser(id, username, password) VALUES ('NULL', '$out_username', '$out_password')");
header('location:final.html');

}

echo '</div>';
echo '</body>';
echo '</html>';

?>
