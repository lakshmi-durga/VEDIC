<?php
$passkey = $_POST['pass'];
$workshopid = $_POST['workshopid'];
mysql_connect('localhost:3306','root','');
mysql_select_db('vedic');
$data = mysql_query("select * from passgen where passkey = '$passkey'");
$count = mysql_num_rows($data);
if($count == 0) {
				header("location:11.html");

}
else {
				header("location:passkey.html");

		}

?>