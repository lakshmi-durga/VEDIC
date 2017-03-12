<?php
$email = $_POST['mailid'];
$password= $_POST['pswd'];
mysql_connect('localhost:3306','root','');
mysql_select_db('vedic');
$data = mysql_query("select * from login where emailid = '$email' and password = '$password'");
if($data) {
	echo "<html>
	       <style>
		     #getstarted {
				 background-color: #4CAF50;
				 border: none;
				 color: white;
				 padding: 15px 32px;
				 text-align: center;
				 text-decoration: none;
				 display: inline-block;
				 font-size: 16px;
				 margin: 40px 600px;
				 cursor: pointer;
			 }
		   </style>
		   <h1 align = 'center' style = 'color : #4CAF50'>WELCOME TO VEDIC</h1>
	      <form action= 'page1.html'>
           <button id = 'getstarted'>Get Started</button>
            </form>
		  </html>";
}
else {
	echo "INVALID CREDENTIALS";
}

?>