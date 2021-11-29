<?php
session_start();

if(!isset($_SESSION['myusername'])){
	header("location:../login/index.php");
}

function unsetSession(){
	session_start();
	session_destroy();
	header('Location:main_login.php');
}
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> Admin Control Panel </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
<link rel="stylesheet" type="text/css" href="admin.css" />
</HEAD>

<BODY>

<div class="container">
	
		<div class="header">
	<h1>Admin Control Panel</h1>
	</div>	

			<div class="left">
						
				<ul> <!-- list used to create simple navigation bar -->
					<li><a href="add_delete_photosImage.php">Add Delete Photos</a></li> <!-- links will not work - example -->
					<li><a href="edit_text.php">Edit Text File Right Panel</a></li>
					<li><a href="update_text_r.php">Update Text in DB Right Panel</a></li>
					<li><a href="logout.php">Logout</a></li>
					
				</ul> 
				
			</div>
	
			
		</div>
</BODY>
</HTML>
