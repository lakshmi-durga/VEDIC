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
$q11 = $_REQUEST['q11'];
$q12 = $_REQUEST['q12'];
mysql_connect("localhost:3306","root","");
mysql_select_db("vedic");
$un = $_SESSION['email'];
$workshopid = $_SESSION['workshopid'];
$date = date("y-m-d");
if($q1 != null && $q2 != null && $q3 != null && $q4 != null && $q5 != null && $q6 != null && $q7 != null && $q8 != null && $q9 != null && $q10 != null && $q11 != null && $q12 != null) {
    $data = mysql_query("insert into gratitude values('$un','$un','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$workshopid','$date','','','')");
}

if($data == Null)
  echo "Insertion Failed";
else {
   echo "Insertion Successful";
   header("loaction:main.html");
}
} 

?>