<?php
session_start();

if(!isset($_SESSION['userinfo']))
{
	
	header("location:login.php");
	exit;
}
else {
$q1 = $_REQUEST['q1']; 
mysql_connect("localhost:3306","root","");
mysql_select_db("vedic");
$un = $_SESSION['email'];
$workshopid = $_SESSION['workshopid'];
$date = date("y-m-d");
if($q1 != null) {
    $data = mysql_query("Insert into brainandthebody values('$un','$un','$q1','$workshopid','$date')");
}
if($data == Null)
  echo "Insertion Failed";
else {
   echo "Insertion Successful";
   header("location:main.html");
}
} 

?>
