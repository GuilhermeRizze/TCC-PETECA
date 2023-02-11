<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="portal_de_provas"; // Database name
$tbl_name="forum_answer"; // Table name

// Connect to server and select databse.
$con=mysqli_connect("localhost", "root", "", "portal_de_provas")or die("cannot connect");
//mysqli_select_db($con,"portal_de_provas")or die("cannot select DB");

// Get value of id that sent from hidden field
$id=$_REQUEST['id'];

// Find highest answer number.
$sql="SELECT * FROM forum_answer WHERE id='$id'";
$result= mysqli_query($con,$sql);
$rows=mysqli_fetch_assoc($result);

// get values that sent from form
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$answer=$_REQUEST['answer'];

$datetime=date("d/m/y H:i:s"); // create date and time
//$datetime = 1;

// Insert answer
$sql2="INSERT INTO forum_answer(id, name, email, answer, datatime)VALUES('$id','$name', '$email', '$answer', '$datetime')";
$result2=mysqli_query($con,$sql2);

if($result2){
 header ("location:view_topic.php?id=$id");


// If added new answer, add value +1 in reply column

}
else {
echo "$id";

echo "ERROR";
}

// Close connection
mysqli_close($con);
?>