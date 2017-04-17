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
$q21 = $_REQUEST['q21'];
$q22 = $_REQUEST['q22'];
$q23 = $_REQUEST['q23'];
$q24 = $_REQUEST['q24'];
$q25 = $_REQUEST['q25'];
$q26 = $_REQUEST['q26'];
$q27 = $_REQUEST['q27'];
$q28 = $_REQUEST['q28'];
$q29 = $_REQUEST['q29'];
$q30 = $_REQUEST['q30'];
mysql_connect("localhost:3306","root","");
mysql_select_db("vedic");
$un = $_SESSION['email'];
$workshopid = $_SESSION['workshopid'];
$date = date("y-m-d");
if($q1 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q1','$workshopid','$date','','','')");
}
if($q2 != null) {
    $data = mysql_query("Insert into whomami values('$un','$un','$q2','$workshopid','$date','','','')");
}
if($q3 != null) {
    $data = mysql_query("Insert into whomami values('$un','$un','$q3','$workshopid','$date','','',''')");
}
if($q4 != null) {
    $data = mysql_query("Insert into whomami values('$un','$un','$q4','$workshopid','$date','','',''')");
}
if($q5 != null) {
    $data = mysql_query("Insert into whomami values('$un','$un','$q5','$workshopid','$date','','',''')");
}
if($q6 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q6','$workshopid','$date','','','')");
}
if($q7 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q7','$workshopid','$date','','','')");
}
if($q8 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q8','$workshopid','$date','','','')");
}
if($q9 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q9','$workshopid','$date','','','')");
}
if($q10 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q10','$workshopid','$date','','','')");
}
if($q11 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q11','$workshopid','$date','','','')");
}
if($q12 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q12','$workshopid','$date','','','')");
}
if($q13 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q13','$workshopid','$date','','','')");
}
if($q14 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q14','$workshopid','$date','','','')");
}
if($q15 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q15','$workshopid','$date','','','')");
}
if($q16 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q16','$workshopid','$date','','','')");
}
if($q17 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q17','$workshopid','$date','','','')");
}
if($q18 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q18','$workshopid','$date','','','')");
}
if($q19 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q19','$workshopid','$date','','','')");
}
if($q20 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q20','$workshopid','$date','','','')");
}
if($q21 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q21','$workshopid','$date','','','')");
}
if($q22 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q22','$workshopid','$date','','','')");
}
if($q23 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q23','$workshopid','$date','','','')");
}
if($q24 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q24','$workshopid','$date','','','')");
}
if($q25 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q25','$workshopid','$date','','','')");
}
if($q26 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q26','$workshopid','$date','','','')");
}
if($q27 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q27','$workshopid','$date','','','')");
}
if($q28 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q28','$workshopid','$date','','','')");
}
if($q29 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q29','$workshopid','$date','','','')");
}
if($q30 != null) {
    $data = mysql_query("Insert into whoami values('$un','$un','$q30','$workshopid','$date','','','')");
}
if($data == Null)
  echo "Insertion Failed";
else {
   echo "Insertion Successful";
 header("loaction:main.html");
}
} 

?>