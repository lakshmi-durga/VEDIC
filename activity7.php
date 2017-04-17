<?php
session_start();
if(!isset($_SESSION['userinfo']))
{
	header("location:login.php");
	exit;
}

else {

mysql_connect("localhost:3306","root","");

mysql_select_db("vedic");

$un = $_SESSION['email'];
$workshopid = $_SESSION['workshopid'];
$date = date("y-m-d");

$name1 = $_POST['cb1'];

if(isset($_POST['cb1'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',1,'$name1[0]','$name1[1]','$workshopid','$date')");
if($data == Null)
  echo "Insertion Failed";
else{}
   


}
else {
echo "You did not choose.";
}

$name2 = $_POST['cb2'];

if(isset($_POST['cb2'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',2,'$name2[0]','$name2[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else{}


}
else {
echo "You did not choose.";
}

$name3 = $_POST['cb3'];

if(isset($_POST['cb3'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',3,'$name3[0]','$name3[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {}
   

}
else {
echo "You did not choose.";
}

$name4 = $_POST['cb4'];

if(isset($_POST['cb4'])) {


$data = mysql_query("Insert into thinkingstyles values('$un','$un',4,'$name4[0]','$name4[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {}
   

}
else {
echo "You did not choose.";
}

$name5 = $_POST['cb5'];

if(isset($_POST['cb5'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',5,'$name5[0]','$name5[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {}
  

}
else {
echo "You did not choose.";
}

$name6 = $_POST['cb6'];

if(isset($_POST['cb6'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',6,'$name6[0]','$name6[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {}
   

}
else {
echo "You did not choose.";
}

$name7 = $_POST['cb7'];

if(isset($_POST['cb7'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',7,'$name7[0]','$name7[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {}
   

}
else {
echo "You did not choose.";
}

$name8 = $_POST['cb8'];

if(isset($_POST['cb8'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',8,'$name8[0]','$name8[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {}
  

}
else {
echo "You did not choose.";
}

$name9 = $_POST['cb9'];

if(isset($_POST['cb9'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',9,'$name9[0]','$name9[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {}
   

}
else {
echo "You did not choose.";
}

$name10 = $_POST['cb10'];

if(isset($_POST['cb10'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',10,'$name10[0]','$name10[1]','$workshopid','$date')");
if($data == Null)
  echo "Insertion Failed";
else {}
  

}
else {
echo "You did not choose.";
}

$name11 = $_POST['cb11'];

if(isset($_POST['cb11'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',11,'$name11[0]','$name11[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else{}
    

}
else {
echo "You did not choose.";
}

$name12 = $_POST['cb12'];

if(isset($_POST['cb12'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',12,'$name12[0]','$name12[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {}
   

}
else {
echo "You did not choose.";
}

$name13 = $_POST['cb13'];

if(isset($_POST['cb13'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',13,'$name13[0]','$name13[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {}
   

}
else {
echo "You did not choose.";
}

$name14 = $_POST['cb14'];

if(isset($_POST['cb14'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',14,'$name14[0]','$name14[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {}
   

}
else {
echo "You did not choose.";
}

$name15 = $_POST['cb15'];

if(isset($_POST['cb15'])) {

$data = mysql_query("Insert into thinkingstyles values('$un','$un',15,'$name15[0]','$name15[1]','$workshopid','$date')");

if($data == Null)
  echo "Insertion Failed";
else {
	header("location:main.html");
}
   

}
else {
echo "You did not choose.";
}
}
?>