<?php
 if ($handle = opendir('gallery')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != "..")
	  {
          	$thelist .= '<a href=" gallery/'.$file.'">'.$file.'</a><br/>';
          }
       }
  closedir($handle);
  }
  echo $thelist;
?>

