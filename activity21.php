<?php
session_start();

if(!isset($_SESSION['userinfo']))
{
	
	header("location:login.php");
	exit;
}
else {
$q1 = $_REQUEST['q1'];
$q2 = $_REQUEST['q2'];
$q3 = $_REQUEST['q3'];
$q4 = $_REQUEST['q4'];
$q5 = $_REQUEST['q5'];
$q6 = $_REQUEST['q6'];
$q7 = $_REQUEST['q7'];
$q8 = $_REQUEST['q8'];
$q9 = $_REQUEST['q9'];
$q10 = $_REQUEST['q10'];
mysql_connect("localhost:3306","root","");
mysql_select_db("vedic");
$un = $_SESSION['email'];
$workshopid = $_SESSION['workshopid'];
$date = date("y-m-d");
if($q1 != null && $q6 != null) {
    $data = mysql_query("Insert into beingastrongperson values('$un','$un','$q1','$q6','$workshopid','$date','','','')");
}
if($q2 != null && $q7 != null) {
    $data = mysql_query("Insert into beingastrongperson values('$un','$un','$q2','$q7','$workshopid','$date','','','')");
}
if($q3 != null && $q8 != null) {
    $data = mysql_query("Insert into beingastrongperson values('$un','$un','$q3','$q8','$workshopid','$date','','','')");
}
if($q4 != null && $q9 != null) {
    $data = mysql_query("Insert into beingastrongperson values('$un','$un','$q4','$q9','$workshopid','$date','','','')");
}
if($q5 != null && $q10 != null) {
    $data = mysql_query("Insert into beingastrongperson values('$un','$un','$q5','$q10','$workshopid','$date','','','')");
}
if($data == Null)
  echo "Insertion Failed";
else {
   echo "Insertion Successful";
  header("location:main.html");
}
} 

?>