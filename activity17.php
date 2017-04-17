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
$q22 = $_REQUEST['q22'];
$q33 = $_REQUEST['q33'];
$q44 = $_REQUEST['q44'];
$q55 = $_REQUEST['q55'];
$q66 = $_REQUEST['q66'];
$q77 = $_REQUEST['q77'];
$q88 = $_REQUEST['q88'];
$q99 = $_REQUEST['q99'];
$q1010 = $_REQUEST['q1010'];
mysql_connect("localhost:3306","root","");
mysql_select_db("vedic");
$un = $_SESSION['email'];
$workshopid = $_SESSION['workshopid'];
$date = date("y-m-d");
if($q1 != null && $q6 != null){
$data = mysql_query("insert into qualitiesandstrengths values('$un','$un','$q1','$q6','$workshopid','$date','','','')");
}
if($q2 != null && $q7 != null){
$data = mysql_query("insert into qualitiesandstrengths values('$un','$un','$q2','$q7','$workshopid','$date','','','')");
}
if($q3 != null && $q8 != null){
$data = mysql_query("insert into qualitiesandstrengths values('$un','$un','$q3','$q8','$workshopid','$date','','','')");
}
if($q4 != null && $q9 != null){
$data = mysql_query("insert into qualitiesandstrengths values('$un','$un','$q4','$q9','$workshopid','$date','','','')");
}
if($q5 != null && $q10 != null){
$data = mysql_query("insert into qualitiesandstrengths values('$un','$un','$q5','$q10','$workshopid','$date','','','')");
}
if($q11 != null && $q66 != null){
$data = mysql_query("insert into qualitiesandstrengths values('$un','$un','$q11','$q66','$workshopid','$date','','','')");
}
if($q22 != null && $q77 != null){
$data = mysql_query("insert into qualitiesandstrengths values('$un','$un','$q22','$q77','$workshopid','$date','','','')");
}
if($q33 != null && $q88!= null){
$data = mysql_query("insert into qualitiesandstrengths values('$un','$un','$q33','$q88','$workshopid','$date','','','')");
}
if($q44 != null && $q99 != null){
$data = mysql_query("insert into qualitiesandstrengths values('$un','$un','$q44','$q99','$workshopid','$date','','','')");
}
if($q55 != null && $q1010 != null){
$data = mysql_query("insert into qualitiesandstrengths values('$un','$un','$q55','$q1010','$workshopid','$date','','','')");
}
if($data == NULL){
	echo "Insertion Failed";
}else{
	echo "Successful";
	header("loaction:main.html");
}
}
?>