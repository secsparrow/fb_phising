<?php
if(isset($_POST['Login']))
{error_reporting(1);
	mysql_connect("localhost","root","");
	mysql_select_db("uas");
	$id = $_GET['id'];


$result = mysql_query("DELETE FROM uas WHERE id=$id");
header("location:index.php");
}
?>