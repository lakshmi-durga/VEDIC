<?php
session_start();

if(!isset($_SESSION['userinfo']))
{
	
	header("location:login.php");
	exit;
}
else {
$q11 = $_REQUEST['q11'];
$q12 = $_REQUEST['q12'];
$q13 = $_REQUEST['q13'];
$q14 = $_REQUEST['q14'];
$q15 = $_REQUEST['q15'];
$q16 = $_REQUEST['q16'];
$q17 = $_REQUEST['q17'];
$q18 = $_REQUEST['q18'];
$q21 = $_REQUEST['q11'];
$q22 = $_REQUEST['q22'];
$q23 = $_REQUEST['q23'];
$q24 = $_REQUEST['q24'];
$q25 = $_REQUEST['q25'];
$q26 = $_REQUEST['q26'];
$q27 = $_REQUEST['q27'];
$q28 = $_REQUEST['q28'];
$q31 = $_REQUEST['q31'];
$q32 = $_REQUEST['q32'];
$q33 = $_REQUEST['q33'];
$q34 = $_REQUEST['q34'];
$q35 = $_REQUEST['q35'];
$q36 = $_REQUEST['q36'];
$q37 = $_REQUEST['q37'];
$q38 = $_REQUEST['q38'];
$q41 = $_REQUEST['q41'];
$q42 = $_REQUEST['q42'];
$q43 = $_REQUEST['q43'];
$q44 = $_REQUEST['q44'];
$q45 = $_REQUEST['q45'];
$q46 = $_REQUEST['q46'];
$q47 = $_REQUEST['q47'];
$q48 = $_REQUEST['q48'];
$q51 = $_REQUEST['q51'];
$q52 = $_REQUEST['q52'];
$q53 = $_REQUEST['q53'];
$q54 = $_REQUEST['q54'];
$q55 = $_REQUEST['q55'];
$q56 = $_REQUEST['q56'];
$q57 = $_REQUEST['q57'];
$q58 = $_REQUEST['q58'];
$q61 = $_REQUEST['q61'];
$q62 = $_REQUEST['q62'];
$q63 = $_REQUEST['q63'];
$q64 = $_REQUEST['q64'];
$q65 = $_REQUEST['q65'];
$q66 = $_REQUEST['q66'];
$q67 = $_REQUEST['q67'];
$q68 = $_REQUEST['q68'];
$q71 = $_REQUEST['q71'];
$q72 = $_REQUEST['q72'];
$q73 = $_REQUEST['q73'];
$q74 = $_REQUEST['q74'];
$q75 = $_REQUEST['q75'];
$q76 = $_REQUEST['q76'];
$q77 = $_REQUEST['q77'];
$q78 = $_REQUEST['q78'];
$q81 = $_REQUEST['q81'];
$q82 = $_REQUEST['q82'];
$q83 = $_REQUEST['q83'];
$q84 = $_REQUEST['q84'];
$q85 = $_REQUEST['q85'];
$q86 = $_REQUEST['q86'];
$q87 = $_REQUEST['q87'];
$q88 = $_REQUEST['q88'];

mysql_connect("localhost:3306","root","");
mysql_select_db("vedic");
$un = $_SESSION['email'];
$workshopid = $_SESSION['workshopid'];
$date = date("y-m-d");
if($q11 != null && $q12 != null && $q13 != null && $q14 != null && $q15 != null && $q16 != null && $q17 != null && $q18!= null){
  $data = mysql_query("insert into pillarstosuccess values('$un','$un','academicsuccess','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$workshopid','$date','','','')");
}
if($q21 != null && $q22 != null && $q23 != null && $q24 != null && $q25 != null && $q26 != null && $q27 != null && $q28!= null){
  $data = mysql_query("insert into pillarstosuccess values('$un','$un','sociallifesuccess','$q21','$q22','$q23','$q24','$q25','$q26','$q27','$q28','$workshopid','$date','','','')");
}
if($q31 != null && $q32 != null && $q33 != null && $q34 != null && $q35 != null && $q36 != null && $q37 != null && $q38!= null){
  $data = mysql_query("insert into pillarstosuccess values('$un','$un','healthsuccess','$q31','$q32','$q33','$q34','$q35','$q36','$q37','$q38','$workshopid','$date','','','')");
}
if($q41 != null && $q42 != null && $q43 != null && $q44 != null && $q45 != null && $q46 != null && $q47 != null && $q48!= null){
  $data = mysql_query("insert into pillarstosuccess values('$un','$un','hobbiesandinterestssuccess','$q41','$q42','$q43','$q44','$q45','$q46','$q47','$q48','$workshopid','$date','','','')");
}
if($q51 != null && $q52 != null && $q53 != null && $q54 != null && $q55 != null && $q56 != null && $q57 != null && $q58!= null){
  $data = mysql_query("insert into pillarstosuccess values('$un','$un','jobandcareersuccess','$q51','$q52','$q53','$q54','$q55','$q56','$q57','$q58','$workshopid','$date','','','')");
}
if($q61 != null && $q62 != null && $q63 != null && $q64 != null && $q65 != null && $q66 != null && $q67 != null && $q68!= null){
  $data = mysql_query("insert into pillarstosuccess values('$un','$un','highereducationsuccess','$q61','$q62','$q63','$q64','$q65','$q66','$q67','$q68','$workshopid','$date','','','')");
}
if($q71 != null && $q72 != null && $q73 != null && $q74 != null && $q75 != null && $q76 != null && $q77 != null && $q78!= null){
  $data = mysql_query("insert into pillarstosuccess values('$un','$un','personallifesuccess','$q71','$q72','$q73','$q74','$q75','$q76','$q77','$q78','$workshopid','$date','','','')");
}
if($q81 != null && $q82 != null && $q83 != null && $q84 != null && $q85 != null && $q76 != null && $q77 != null && $q78!= null){
  $data = mysql_query("insert into pillarstosuccess values('$un','$un','longtermgoals','$q81','$q82','$q83','$q84','$q85','$q86','$q87','$q88','$workshopid','$date','','','')");
}
if($data == null)
  echo "Insertion Failed";
else {
   echo "Insertion Successful";
  header("loaction:main.html");
}
}
?>