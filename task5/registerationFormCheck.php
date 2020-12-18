<?php
include_once("conn_database.php");
// Check connection
//Values from form
$username= $_POST['txtUsername'];
$email = $_POST['txtEmail'];
$birthday = $_POST['txtDateOfBirth'];
$address = $_POST['txtAddress'];
$password = $_POST['txtPassword'];
$enteredBase64Password = base64_encode($password);


//  INSERT query   , check hash variable in the Values statement 
//$userQuery = "INSERT INTO Customer (Customer_Id, CustonerName, CustomerEmailAddress, DateOfBirth, Address ,Password ) Values('$userId', '$username', '$email', '$birthday', '$password')";
$userQuery = "INSERT INTO customer (CustomerName, CustomerEmailAddress, DateOfBirth, Address ,Password ) Values('$username', '$email', '$birthday','$address', '$enteredBase64Password')";

if ($conn->query($userQuery) == TRUE)
{
 echo "insert done";
    header("location:loginForm.php");
}
else
{
	echo "not successfull";
}
?>

