<?php

// server and db connection values
include_once("conn_database.php");

//session
session_start();
$time=30*60;
setcookie(session_name(),session_id(),time()+$time,"/");
$_session['txtEmail']=$_POST['txtEmail'];
$_session['txtPassword']=  $_POST['txtPassword'];
// values come from user entry in webform
$Email =$_session['txtEmail'];
$password =  $_session['txtPassword'];
$_SESSION['captcha']= $_POST['captcha'];
//echo strtoupper(trim($_SESSION['captcha_code']));
echo strtoupper(trim($_SESSION['captcha']));

if($Email==""){
    echo "<script language='JavaScript'>alert('Please log in to this system through the correct way！');history.back();</script>";
}

if (strtoupper(trim($_SESSION['captcha_code']))<>strtoupper(trim($_SESSION['captcha']))){
    echo "<script language='JavaScript'>alert('Verification code error！');history.back();</script>";
}
//Base64 of entered value
//base64_encode
$enteredBase64Password = base64_encode($password);

// Check connection
if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}


// query
$userQuery = "SELECT * FROM Customer";
$userResult = $conn->query($userQuery);

// flag type variable 
$userFound = 0;

echo "<table border='1'>";
if ($userResult->num_rows > 0)
{
  while($userRow = $userResult->fetch_assoc())
    {
		if ($userRow['CustomerEmailAddress'] == $Email)
		{
			$userFound = 1;

			// decode Base64 stored value of password
			$getPassword = strval($userRow['Password']);
			$storedPasswordBase64 = base64_decode($userRow['Password']);



			if ($storedPasswordBase64 == $password)
			{
                $username = $userRow['CustomerName'];
				echo "Hi<br>" .@$username. "!";
				echo "<br/> Welcome to our website";
                header("location:LoginSucceful.php");

			}
			else
			{
				echo "Wrong password";
			}
		}
	}
}
if ($userFound == 0)
{
	echo "This user was not found in our Database";
}
 
 ?>
