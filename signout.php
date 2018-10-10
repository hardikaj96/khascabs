<?php
include 'connect.php';
session_start();
unset ($_SESSION['signed_in']);
session_destroy();
echo "You successfully logged out";
header ("refresh:3;url=index.html" );
mysqli_close($con);
exit ();
?>