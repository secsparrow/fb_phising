<?php
	session_start();
	error_reporting(1);
	if(isset($_SESSION['fbadmin']))
	{
		mysql_connect("localhost","root","");
		mysql_select_db("uas");
?>

<?php
	include("background.php");
?>
<html>
<head>
	<title>Users</title>
	
	</script>
</head>
<body>


	<div style="position:absolute; left:27%; top:10%;"> <img src="img/all_users.png" height="100" width="100"> </div>
	<div style="position:absolute; left:35%; top:12%;"> <h1 style="color:#3B59A4;"> All Users</h1> </div>
    <hr style="position:absolute;left:25%;top:25%;height:0.5%;width:50%; border-color:#CCCCCC; box-shadow:0px 5px 5px 0px rgb(0,0,0); ">
    
<?php
	$all_male_que=mysql_query("select * from uas");

?>
    <div style="position:absolute; left:26%; top:42%;"> <img src="img/male.png" height="60" width="60">  </div>
   
    <div style="position:absolute; left:19%; top:55%;">
    <table border="1">
    <tr>
    	<th> Email</th>
        <th> Password</th>
		<th></th>
        
    </tr>
<?php
	while($male_info=mysql_fetch_array($all_male_que))
	{
?>
    	<tr>
        	<td> <?php echo $male_info['email']; ?> </td>
        	<td> <?php echo $male_info['password']; ?> </td>
			<td><a href='delete.php?id=$male_info[id]'>Hapus</a></td>
           
        </tr>
<?php
	}
?>
   	</table>
    </div>
    
    
    
    
    

<div style="position:absolute; left:90%; top:100%;" > &nbsp; </div>	
</body>
</html>
<?php

		header("location:../jos/index.php");
	}
?>