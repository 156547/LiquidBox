<html>
<head>
<title></title>
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
</head>

<body>

<h1>test</h1>
<?php
//error_reporting(E_ALL ^ E_NOTICE);
if($_GET['action'] == "delete") 
{

?> 
<h1>test2</h1>
<form name="delete" action="<?=$PHP_SELF?>" method="POST" enctype="multipart/form-data"> 
<input type="hidden" name="id" value="<?=$_GET['id'] ?>" /> 
Are you sure you wish to delete "<?echo $_GET['id'];?>" ? 
<input type="submit" name="doaction" value="YES" /> 
</form> 

<?php 


if ($_POST['doaction']) 
{ 
    $file = $_POST['id']; 
    if (file_exists($file)) 
    { 
        unlink('gallery/' .$file);
        echo "Deleted '$file'"; 
        echo "<br><br><a href=delete_file.php>Return to index</a>";
    } 
    else 
    { 
        echo "The file '$file' does not exist."; 
    } 
} 


}
else //if no $_GET['action'] (the page will default to this)
{

if ($handle = opendir('gallery')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != ".." && $file != ".htaccess" && $file != "test.php" && $file != "del.php" && is_file($file))
      {
              $list .= '<a href="'.$file.'">'.$file.'</a> - <font size="2"><a href="test.php?action=delete&id='.$file.'">[delete]</a></font><br><br>';
          }
       }
  closedir($handle);
  }

echo $list;

}

?>  
</body>
</html>