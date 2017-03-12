<?php
$email = $_POST['mailid'];
$pswd = $_POST['pswd'];
$cpswd = $_POST['cpswd'];
if($pswd == $cpswd){
mysql_connect('localhost:3306','root','');
mysql_select_db('vedic');
$data = mysql_query("insert into login values('$email','$pswd')");
if($data){
	echo "<html>
	        <h1 align = 'center'>Successfully singed up</p><br>
			<p align = 'center'>please<a href = 'profile.html'>Click here</a>continue</p>
		 </html>";
}
else {
	echo "error";
}
}

?>