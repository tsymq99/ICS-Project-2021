<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/html.css">
    <script src="css/bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="css/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <style>
    </style>
</head>
<body class="text-center">
<form action="registerationFormCheck.php" method="post" onsubmit = "return check()" class="form-signin"  enctype="multipart/form-data">
    <p>Login successful</p>
    <a href="destroyid.php">exit</a>
</form>
<script type="text/javascript">

</script>
</html>
<?php
//session
session_start();
$time=30*60;
setcookie(session_name(),session_id(),time()+$time,"/");



@$_session['txtEmail']=$_POST['txtEmail'];
@$_session['txtPassword']= $_POST['txtPassword'];
// values come from user entry in webform
@$Email =$_session['txtEmail'];
@$password =  $_session['txtPassword'];


?>