<?php
session_start();

if(!isset($_SESSION['userinfo']))
{	
	header("location:login.php");
	exit;
}
else {


$s=$_REQUEST['q1'];
$s1=$_REQUEST['q2'];
$s2=$_REQUEST['q3'];
$s3=$_REQUEST['q4'];
$s4=$_REQUEST['q5'];
$s5=$_REQUEST['q6'];
$s6=$_REQUEST['q7'];
$s7=$_REQUEST['q8'];
$s8=$_REQUEST['q9'];
$s9=$_REQUEST['q10'];
$s10=$_REQUEST['q11'];
$s11=$_REQUEST['q12'];
$s12=$_REQUEST['q13'];
$s13=$_REQUEST['q14'];
$s14=$_REQUEST['q15'];
$s15=$_REQUEST['q16'];
$s16=$_REQUEST['q17'];
$s17=$_REQUEST['q18'];
$s18=$_REQUEST['q19'];
$s19=$_REQUEST['q20'];
$s20=$_REQUEST['q21'];
$s21=$_REQUEST['q22'];
$s22=$_REQUEST['q23'];
$s23=$_REQUEST['q24'];
$s24=$_REQUEST['q25'];
$s25=$_REQUEST['q26'];
$s26=$_REQUEST['q27'];
$s27=$_REQUEST['q28'];
$s28=$_REQUEST['q29'];
$s29=$_REQUEST['q30'];
$s30=$_REQUEST['q31'];
$s31=$_REQUEST['q32'];
$s32=$_REQUEST['q33'];
$s33=$_REQUEST['q34'];
$s34=$_REQUEST['q35'];
$s35=$_REQUEST['q36'];
$s36=$_REQUEST['q37'];
$s37=$_REQUEST['q38'];
$s38=$_REQUEST['q39'];
$s39=$_REQUEST['q40'];
$s40=$_REQUEST['q41'];
$s41=$_REQUEST['q42'];


mysql_connect("localhost:3306","root","");
mysql_select_db("vedic");
$un = $_SESSION['email'];
$workshopid = $_SESSION['workshopid'];
$date = date("y-m-d");
    $data = mysql_query("Insert into LeisureInterest values('$un','$un','$s','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12','$s13','$s14','$s15','$s16','$s17','$s18','$s19','$s20','$s21','$s22','$s23','$s24','$s25','$s26','$s27','$s28','$s29','$s30','$s31','$s32','$s33','$s34','$s35','$s36','$s37','$s38','$s39','$s40','$s41','$workshopid','$date','','','')");
if(!$data)
  die(mysql_error());
else {
   echo "Insertion Successful";
header("loaction:main.html");
}
} 

?>




