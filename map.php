<?php
ini_set('display_errors', 'On');
session_start();
include 'connection.php';


if(isset($_SESSION['valid_user'])){
//echo $_SESSION['valid_user'];
$user=$_SESSION['valid_user'];


$result = $mysqli->query("SELECT C.country FROM finalusercountry C INNER JOIN finaluser U ON U.id=C.uid WHERE U.username ='$user'");
if($result->num_rows > 0){
echo '<select id=countrymap>';
$i=0;
while($row = $result->fetch_assoc()){
        echo '<option>' .$row["country"].'</option>';
        }

}
}

echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<title></title>';
echo '<script src="http://maps.google.com/maps/api/js?sensor=true"></script>';
echo '<script src="gmaps.js"></script>';
echo '<style type="text/css">';
echo ' #map {width: 400px; height: 400px;}';
echo  '</style>';
echo '</head>';
echo '<body>';





echo '<div id="map"></div>';
echo  '<script src= map.js>';
echo ' </script>';

echo '</body>';
echo '</html>';


?>
