<?php
error_reporting(E_ALL ^ E_NOTICE);

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="text_right2"; // Table name
$newdata = $_POST['newdata'];

// Connect to server and select database.
$con = mysqli_connect("$host", "$username", "$password")or die(mysqli_error($con));
mysqli_select_db($con,$db_name) or die(mysqli_error($con));

// Check if form has been submitted
if(isset($_POST['newdata'])) {
//query to be executed.
    $query = "UPDATE `test`.`text_right2` SET `content` = '$newdata'";
    //submit query
    $result = mysqli_query($con, $query) or die(mysqli_error($con));
    //Close DB connection
    mysqli_close($con);
}
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
            <h1>Admin Control Panel</h1>
        </div>

        <h3>Contents of File</h3>
        <div class='textarea'>
        <form action='update_text_r.php' method= 'post' >
            <label>
            <textarea name='newdata' cols='50%' rows='10'><?php

            $host="localhost"; // Host name
            $username="root"; // Mysql username
            $password=""; // Mysql password
            $db_name="test"; // Database name
            $tbl_name="text_right2"; // Table name


            // Connect to server and select database.
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

            mysqli_close($con);
            ?></textarea>
            </label>
            <input type='submit' value='Update'>
        </form>
        </div>

    </div>
    </body>
</html>
