<?php
/**
 * Created by PhpStorm.
 * User: yjc
 * Date: 2020/12/18
 * Time: 22:26
 */
$servername = "localhost";
$rootuser="root";
$db="task5";
$rootpassword ="root";
// Create connection
$conn = new mysqli($servername, $rootuser, $rootpassword, $db);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>