<?php
require "db.php";

$value = $_GET['firstname'];
$value2 = $_GET['lastname'];
$value3 = $_GET['email-address'];
$value4 = $_GET['phonenumber'];
$value5 = $_GET['gender'];
$value6 = $_GET['birthday'];
$value7 = $_GET['password'];

$sql = "select * from accounts where email='$value3'";
$results = runQuery($sql2);
if(count($results) > 0)
{
	header("Location: emailexists.php");


}else{

$sql = "insert into accounts (email, fname, lname, phone, birthday, gender, password) values ('$value3','$value','$value2','$value4','$value6', '$value5', '$value7')";
$j = runQuery($sql2);
header("Location: loginpage.php");
}

?>