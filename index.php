<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">				
<!-- Always declare DOCTYPE first -->

<html>
	<head>
<!--        The box.css is used to colour the divs so they can be identified on screen-->
		<link rel="stylesheet" type="text/css" href="box.css" />
<!--        The lightbox css is called in the gallery for displaying images in modal view-->
		<link rel="stylesheet" type="text/css" href="lightbox/css/jquery.lightbox-0.5.css" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script type="text/javascript" src="lightbox/js/jquery.min.js"></script>
		<script type="text/javascript" src="lightbox/js/jquery.lightbox-0.5.pack.js"></script>
		<script type="text/javascript" src="script.js"></script>
			<title>My CMS Web Site!</title>
	</head>
	
	<body>

<!-- This is a basic way of creating a web page - you can create a "wrapper div" with all divs held
	within. You could set a minimum width using property - min-width: amount px; which would sort 
	issue with right div. Max width can also be used! -->
	<div class="container">
	
			<div class="top">
				<h1> Top </h1>
			</div>

			<div class="left">
				<h1> Left </h1>
		
				<ul> <!-- list used to create simple navigation bar -->
					<li><a href="default.html">Home</a></li> <!-- links will not work - example -->
					<li><a href="news.html">News</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="about.html">About</a></li>
				</ul> 
				<p>Example paragraph</p>

			</div>
	
			<div class="center">
				<div id="gallery">
				<?php include 'gallery.php'; ?>
				</div>
			</div>
					
						
			<div class="right">			
				<p> 				
					<?php include 'read_text.php'; ?>
				</p>		
			</div>
			
			<div class="right2">			
				<p> 				
					<?php include 'read_text_right2_db.php'; ?>
				</p>		
			</div>
			
			<div class="bottom">
				<h1> Bottom </h1>
			</div>
		</div>
	</body>
</html>	