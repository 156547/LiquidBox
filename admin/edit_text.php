<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
error_reporting(E_ALL ^ E_NOTICE);
// set file to read
$filename = "right.txt";

//check to see if 'newdata' has been posted
if(isset($_POST['newdata'])) {
    $newdata = $_POST['newdata'];

    if ($newdata != '') {
        // open file
        $fw = fopen("../" . $filename, 'w') or die('Could not open file!');
        // write to file
        // added stripslashes to $newdata
        $fb = fwrite($fw, stripslashes($newdata)) or die('Could not write to file');
        // close file
        fclose($fw);
    }
}

    // open file to read contents into $data to display in form for editing
  $fh = fopen("../".$filename, "r") or die("Could not open file!");
    // read file contents
  $data = fread($fh, filesize("../".$filename)) or die("Could not read file!");
    // close file
  fclose($fh);
?> 

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" type="text/css" href="admin.css" />
    <script src="verify.js" type="text/javascript"></script>
    <title>Edit Text: Right Panel</title>

    </head>

    <body>
    <div class="container">
    <a href="index.html">Admin Home</a>
        <div class="header">
            <h1>Admin Conrol Panel</h1>
        </div>

        <h3>Contents of File</h3>
        <?php echo "
        <div class='textarea'>
            <form action='edit_text.php' method= 'post' >
            <textarea name='newdata' cols='50%' rows='10'>$data</textarea>
            <input type='submit' value='Change'>
            </form>
        </div>";
        ?>
    </div>
    </body>
</html>