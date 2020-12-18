<?php
// server and db connection values
include_once("conn_database.php");

// values come from user entry in webform
//session
session_start();
$time=30*60;
setcookie(session_name(),session_id(),time()+$time,"/");
$_session['txtEmail']=$_POST['txtEmail'];
$_session['txtPassword']=  $_POST['txtPassword'];
$_session['txtNewPassword']=  $_POST['txtNewPassword'];
// values come from user entry in webform
$email =$_session['txtEmail'];
$password =  $_session['txtPassword'];
$newpassword =$_session['txtNewPassword'];
if($Email==""){
    echo "<script language='JavaScript'>alert('Please log in to this system through the correct way！');history.back();</script>";
}
//Base64 of entered value
//base64_encode
$enteredBase64Password = base64_encode($password);
$enteredBase64newPassword = base64_encode($newpassword);
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
		if ($userRow['CustomerEmailAddress'] == $email)
		{
			$userFound = 1; 
			
			// decode Base64 stored value of password
			$getPassword = strval($userRow['Password']);
			$storedPasswordBase64 = base64_decode($userRow['Password']);
			if ($storedPasswordBase64 == $password)
			{
                $updateQuery = "update customer set Password ='".$enteredBase64newPassword ."'";
                $updateResult = $conn->query($updateQuery);
				echo "Hi" .@$username. "!";
				echo "<br/> Updating password successful!";
                header("location:loginForm.php");
			}
			else
			{
				echo "Updating failed !";
			}
		}
	}
}
if ($userFound == 0)
{
	echo "This user was not found in our Database";
}
 ?>
