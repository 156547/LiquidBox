<?php
$size = 1048756;
//Types of file allowed
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png")
|| ($_FILES["file"]["type"] == "image/pjpeg"))
//Put a limit on file size
&& ($_FILES["file"]["size"] < $size))
  {
  //Return errors to user if there is one or more
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
	//Upload files if no errors
    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
    echo "Type: " . $_FILES["file"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
	//store in temp directory
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
	
	//Check to see if the file is already uploaded
    if (file_exists("gallery/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "gallery/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "gallery/" . $_FILES["file"]["name"];
      }
    }
  }
  
  //Let user know if file is too big
	else
		{
		if ($_FILES["file"]["size"] > $size)
		{
		echo $_FILES["file"]["name"] . " is too large, please use a file smaller than, " .($size / 1024) . " kb";
		}
	
	//Return any other error to user
	else
  {
  echo "Invalid file";
  }
}
?> 