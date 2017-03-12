<?php
$firstname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lastname = isset($_POST['lname']) ? $_POST['lname'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$collegename = isset($_POST['cname']) ? $_POST['cname'] : '';
$collegeid = isset($_POST['cid']) ? $_POST['cid'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$branch = isset($_POST['branch']) ? $_POST['branch'] : '';
$dobmonth = isset($_POST['DOBmonth']) ? $_POST['DOBmonth'] : '';
$dobday = isset($_POST['DOBday']) ? $_POST['DOBday'] : '';
$dobyear = isset($_POST['DOByear']) ? $_POST['DOByear'] : '';
mysql_connect('localhost:3306','root','');
mysql_select_db('vedic');
$data1 = mysql_query("insert into profile values('$firstname','$lastname','$gender','$collegename','$collegeid','$email','$branch','$dobmonth','$dobday','$dobyear')");
if($data1){
	echo "<html>
	        <h1 align = 'center'>Your profile has been updated</p><br>
			<p align = 'center'><a href = 'page1.html'>Click here</a>continue</p>
		 </html>";
}
else {
	"error";
}

?>