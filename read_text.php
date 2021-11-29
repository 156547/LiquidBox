<?php
error_reporting(E_ALL ^ E_NOTICE);
// set file to read
$filename = "right.txt";
  
// open file
  $fh = fopen($filename, "r") or die("Could not open file!");
// read file contents
  $data = fread($fh, filesize($filename)) or die("Could not read file!");
// close file
  fclose($fh);
// print file contents
 echo "$data";
?> 