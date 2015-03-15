<?php

session_start();
$old_user = $_SESSION['valid_user'];
unset($_SESSION['valid_user']);
session_destroy();


?>

<html>
<body>
<h1> Log Out </h1>

</body>
</html>
