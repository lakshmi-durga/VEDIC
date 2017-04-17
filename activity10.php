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
$s42=$_REQUEST['q43'];
$s43=$_REQUEST['q44'];
$s44=$_REQUEST['q45'];
$s45=$_REQUEST['q46'];
$s46=$_REQUEST['q47'];
$s47=$_REQUEST['q48'];
$s48=$_REQUEST['q49'];
$s49=$_REQUEST['q50'];
$s50=$_REQUEST['q51'];
$s51=$_REQUEST['q52'];
$s52=$_REQUEST['q53'];
$s53=$_REQUEST['q54'];
$s54=$_REQUEST['q55'];
$s55=$_REQUEST['q56'];
$s56=$_REQUEST['q57'];
$s57=$_REQUEST['q58'];
$s58=$_REQUEST['q59'];
$s59=$_REQUEST['q60'];
$s60=$_REQUEST['q61'];
$s61=$_REQUEST['q62'];
$s62=$_REQUEST['q63'];
$s63=$_REQUEST['q64'];
$s64=$_REQUEST['q65'];
$s65=$_REQUEST['q66'];
$s66=$_REQUEST['q67'];
$s67=$_REQUEST['q68'];
$s68=$_REQUEST['q69'];
$s69=$_REQUEST['q70'];
$s70=$_REQUEST['q71'];
$s71=$_REQUEST['q72'];
$s72=$_REQUEST['q73'];
$s73=$_REQUEST['q74'];
$s74=$_REQUEST['q75'];
$s75=$_REQUEST['q76'];
$s76=$_REQUEST['q77'];
$s77=$_REQUEST['q78'];
$s78=$_REQUEST['q79'];
$s79=$_REQUEST['q80'];
$s80=$_REQUEST['q81'];
$s81=$_REQUEST['q82'];
$s82=$_REQUEST['q83'];
$s83=$_REQUEST['q84'];
$s84=$_REQUEST['q85'];
$s85=$_REQUEST['q86'];
$s86=$_REQUEST['q87'];
$s87=$_REQUEST['q88'];

mysql_connect("localhost:3306","root","");
mysql_select_db("vedic");
$un = $_SESSION['email'];
$workshopid = $_SESSION['workshopid'];
$date = date("y-m-d");

  $data = mysql_query("insert into identifyintelligence values('$un','$un','$s','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12','$s13','$s14','$s15','$s16','$s17','$s18','$s19','$s20','$s21','$s22','$s23','$s24','$s25','$s26','$s27','$s28','$s29','$s30','$s31','$s32','$s33','$s34','$s35','$s36','$s37','$s38','$s39','$s40','$s41','$s42','$s43','$s44','$s45','$s46','$s47','$s48','$s49','$s50','$s51','$s52','$s53','$s54','$s55','$s56','$s57','$s58','$s59','$s60','$s61','$s62','$s63','$s64','$s65','$s66','$s67','$s68','$s69','$s70','$s71','$s72','$s73','$s74','$s75','$s76','$s77','$s78','$s79','$s80','$s81','$s82','$s83','$s84','$s85','$s86','$s87','$workshopid','$date','','','')");

  if(!$data)
  die(mysql_error());
else
   echo "Insertion Successful";
   header("loaction:main.html");
} 

?>
