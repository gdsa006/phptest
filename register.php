
<?php include('connection/connect.php'); ?>
<?php
//select a database to work with
$selected = mysql_select_db("pharmacy",$dbhandle) 
  or die("Could not select examples");
?>
<?php
$usernm=$_POST['username'];
$emal=$_POST['email'];
$pwd=$_POST['password'];
echo $query="INSERT INTO pharmacy.users (username, email, password) VALUES ('$usernm','$emal','$pwd')";
$sql=mysql_query($query);
?>