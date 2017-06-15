<?php
//select a database to work with
$selected = mysql_select_db("examples",$dbhandle) 
  or die("Could not select examples");
?>
<?php

$username=$_POST['username'];
echo $username;


?>