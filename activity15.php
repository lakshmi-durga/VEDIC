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
$q13 = $_REQUEST['q13'];
$q14 = $_REQUEST['q14'];
$q15 = $_REQUEST['q15'];
$q16 = $_REQUEST['q16'];
$q17 = $_REQUEST['q17'];
$q18 = $_REQUEST['q18'];
$q19 = $_REQUEST['q19'];
$q20 = $_REQUEST['q20'];
mysql_connect("localhost:3306","root","");
mysql_select_db("vedic");
$un = $_SESSION['email'];
$workshopid = $_SESSION['workshopid'];
$date = date("y-m-d");
if($q1 != null && $q11 != null) {
    $data = mysql_query("Insert into whaticantdo values('$un','$un','$q1','$q11','$workshopid','$date','','','')");
}
if($q2 != null && $q12 != null) {
    $data = mysql_query("Insert into whaticantdo values('$un','$un','$q2','$q12','$workshopid','$date','','','')");
}
if($q3 != null && $q13 != null) {
    $data = mysql_query("Insert into whaticantdo values('$un','$un','$q3','$q13','$workshopid','$date','','','')");
}
if($q4 != null && $q14 != null) {
    $data = mysql_query("Insert into whaticantdo values('$un','$un','$q4','$q14','$workshopid','$date','','','')");
}
if($q5 != null && $q15 != null) {
    $data = mysql_query("Insert into whaticantdo values('$un','$un','$q5','$q11','$workshopid','$date','','','')");
}
if($q6 != null && $q16 != null) {
    $data = mysql_query("Insert into whaticantdo values('$un','$un','$q6','$q16','$workshopid','$date','','','')");
}
if($q7 != null && $q17 != null) {
    $data = mysql_query("Insert into whaticantdo values('$un','$un','$q7','$q17','$workshopid','$date','','','')");
}
if($q8 != null && $q18 != null) {
    $data = mysql_query("Insert into whaticantdo values('$un','$un','$q8','$q18','$workshopid','$date','','','')");
}
if($q9 != null && $q19 != null) {
    $data = mysql_query("Insert into whaticantdo values('$un','$un','$q9','$q19','$workshopid','$date','','','')");
}
if($q10 != null && $q20 != null) {
    $data = mysql_query("Insert into whaticantdo values('$un','$un','$q10','$q20','$workshopid','$date','','','')");
}

if($data == Null)
  echo "Insertion Failed";
else {
   echo "Insertion Successful";
   header("loaction:main.html");
}
} 

?>