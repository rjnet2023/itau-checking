<?php
error_reporting(0);
session_start();
unset($_SESSION[user]);
session_destroy();
?>

<?php header('Location: login.php');
 ?>