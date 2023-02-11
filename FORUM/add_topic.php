<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="portal_de_provas"; // Database name
$tbl_name="forum_question"; // Table name

// Connect to server and select database.
$con=mysqli_connect("localhost", "root", "")or die("cannot connect");
mysqli_select_db($con,"portal_de_provas")or die("cannot select DB");

// get data that sent from form
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];

$datetime=date("d/m/y h:i:s"); //create date time

$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result=mysqli_query($con,$sql);

if($result){
	header ("location:main_forum.php");

}
else {
echo "ERROR";
}
mysqli_close($con);
?>