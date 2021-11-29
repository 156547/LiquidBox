<?php
//error_reporting(E_ALL ^ E_NOTICE);


if(isset($_POST['upload']))
{
	//clear 'delete' variable from previous delete operation
	$_GET["delete"]=NULL;

	$uploadDir="../gallery/";
	$fileName = $_FILES['file']['name'];

	$tmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileType = $_FILES['file']['type'];

	$filePath = $uploadDir . $fileName;

	$result = move_uploaded_file($tmpName, $filePath);
		if (!$result) {
		echo "Error uploading file";
		exit;
	}
}



if ($_GET)
{
	$var=$_GET["delete"];
	$path="../gallery/".$var;
		if (is_file($path))
		{
		$status=unlink($path);
		}
		unset($GLOBALS["delete"]);

	//$_GET['delete']=NULL;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="admin.css" />
<script src="admin.js" type="text/javascript"></script>
<title>Add Delete Photographs</title>

</head>

<body>
<div class="container">
<a href="index.html">Admin Home</a>
	<div class="header">
	<h1>Admin Control Panel</h1>
	</div>
	
	<div class="centre">
	<h2>Add Photos to Gallery</h2>
	<form action="" method="post" name = "upload" onsubmit="return validate_upload ( );" enctype="multipart/form-data">
	<table>
	<tr><td><input type="file" name="file" id="file" /></td></tr>
	<tr><td><input type="submit" name="upload" value="submit" /></td></tr>
	</table>
	</form>

	<h2>Delete Photos from Gallery</h2>

	<form action=""  name="delete" method="get">
	<table>
	<?php $count = "0";
	$getDir = opendir("../gallery/");
	while($filename = readdir($getDir)) {
		if ($filename[0]!= "." && $filename[0]!= ".." && $filename!= "Thumbs.db") {
			echo "<tr><td><a href='../gallery/".$filename."'><img src='../gallery/".$filename."' alt=".$filename." >  $filename</a></td><td>";?>
			<a onclick="return confirm_delete()"; href="?delete=<?php echo $filename;?>"><p class = "delete">Delete?</p></a></td></tr>
			<?php
		$count++;
		}
	} 
	?>

	</table>
	</form>
	</div>
</div>
</body>
</html> 