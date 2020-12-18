<?php
session_start();
$_SESSION=array();
unset($Email);
unset($password);
session_destroy();
echo "have exited!";
header("Location:loginForm.php");
?>


