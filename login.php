<?php
$email = $_POST['mailid'];
$password= $_POST['pswd'];
$workshopid = $_POST['workshopid'];
mysql_connect('localhost:3306','root','');
mysql_select_db('vedic');
$data = mysql_query("select * from login where emailid = '$email' and password = '$password'");
$count = mysql_num_rows($data);
if($count == 0) {
	echo "INVALID CREDENTIALS";
}
else {
	$userInfo=mysql_fetch_assoc($data);
			
			session_start();
			$_SESSION['workshopid'] = $workshopid;
			$_SESSION['email'] = $email;
			$_SESSION['userinfo']=$userInfo;
			$_SESSION['userId']=$userInfo['email'];
			
			if($_SESSION['email']== "lakshmidurga027@gmail.com"){
				header("location:admin.html");
			}
			else {
				header("location:main.html");
			}
		}

?>