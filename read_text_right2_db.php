<?php
	
	$host="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password
	$db_name="test"; // Database name 
	$tbl_name="text_right2"; // Table name 

	
	// Connect to server and select databse.
	$con = mysqli_connect("$host", "$username", "$password")or die(mysqli_error($con)); 
	mysqli_select_db($con,$db_name) or die(mysqli_error($con));
	
	//query to be executed.
	$query = "SELECT `content` FROM `test`.`text_right2` ";
	//submit query
	$result = mysqli_query($con, $query)or die(mysqli_error($con));
	
	while($row = mysqli_fetch_array($result))
			{
			echo $row['content'];  
			}
	
	

	//close database
	mysqli_close($con);																
	
	
?>