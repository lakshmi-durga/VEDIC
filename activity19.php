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

 $data = mysql_query("Insert into workinterest values('$un','$un','$s','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$s9','$s10','$s11','$s12','$s13','$s14','$s15','$s16','$s17','$s18','$s19','$s20','$s21','$s22','$s23','$s24','$s25','$s26','$s27','$s28','$s29','$s30','$s31','$s32','$s33','$s34','$s35','$s36','$s37','$s38','$s39','$s40','$s41','$workshopid','$date','','','')");

if(!$data)
  die(mysql_error());
else 
   echo "Insertion Successful";

$result1 = mysql_query("select a1,a2,a3,a4,a5,a6 from leisureinterest");
$values1 = mysql_fetch_array($result1);
$result2 = mysql_query("select b1,b2,b3,b4,b5,b6 from workinterest");
$values2 = mysql_fetch_array($result2);

?>
<!DOCTYPE html>
<!-- saved from url=(0047)http://themes.quitenicestuff.com/parkcollegewp/ -->
<html lang="en-US"><!--<![endif]--><!-- BEGIN head --><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<!-- Meta Tags -->
	
	<meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
	
		
	<!-- Title -->
	<title>VEDIC | A Theme for Scientific Learning</title>
	
	<!-- Stylesheets -->
	<link rel="stylesheet" href="./style.css" type="text/css" media="all">
	
	<link href="./css" rel="stylesheet" type="text/css">	
	<!-- RSS Feeds & Pingbacks -->
	<link rel="alternate" type="application/rss+xml" title="ParkCollege RSS Feed" href="http://themes.quitenicestuff.com/parkcollegewp/feed/">
	<link rel="pingback" href="http://themes.quitenicestuff.com/parkcollegewp/xmlrpc.php">
	
	<style type="text/css">.post-tags {display: none;}</style>	
	<link rel="alternate" type="application/rss+xml" title="VEDIC » Feed" href="http://themes.quitenicestuff.com/parkcollegewp/feed/">
<link rel="alternate" type="application/rss+xml" title="ParkCollege » Comments Feed" href="http://themes.quitenicestuff.com/parkcollegewp/comments/feed/">
<link rel="alternate" type="application/rss+xml" title="ParkCollege » Home Comments Feed" href="http://themes.quitenicestuff.com/parkcollegewp/home/feed/">
<link rel="stylesheet" id="contact-form-7-css" href="./styles.css" type="text/css" media="all">
<link rel="stylesheet" id="tp_twitter_plugin_css-css" href="./tp_twitter_plugin.css" type="text/css" media="screen">
<link rel="stylesheet" id="superfish-css" href="./superfish.css" type="text/css" media="all">
<link rel="stylesheet" id="prettyPhoto-css" href="./prettyPhoto.css" type="text/css" media="all">
<link rel="stylesheet" id="flexslider-css" href="./flexslider.css" type="text/css" media="all">
<link rel="stylesheet" id="responsive-css" href="./responsive.css" type="text/css" media="all">
<link rel="stylesheet" id="colour-css" href="./colour.css" type="text/css" media="all">
<script type="text/javascript" src="./jquery.js.download"></script>
<script type="text/javascript" src="./jquery-migrate.min.js.download"></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://themes.quitenicestuff.com/parkcollegewp/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://themes.quitenicestuff.com/parkcollegewp/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.0.16">
<link rel="canonical" href="http://themes.quitenicestuff.com/parkcollegewp/">
<link rel="shortlink" href="http://themes.quitenicestuff.com/parkcollegewp/">
<style>
<!--table, th, td {
    border: 1px solid black;
}-->
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
	
<!-- END head -->
</head>

<!-- BEGIN body -->
<body id="top" class="home page page-id-8 page-template page-template-page-templatestemplate-homepage-php">

	<!-- BEGIN #header-wrapper -->
	<div id="header-wrapper">
		
		<!-- BEGIN #header-border -->
		<div id="header-border">
		
			<!-- BEGIN #header-top -->
			<div id="header-top" class="clearfix">

				<ul class="top-left-nav clearfix"><li id="menu-item-63" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-63"><a href="">Blog</a><span>/</span></li>
<li id="menu-item-64" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-64"><a href="">WorkShops</a><span>/</span></li>
<li id="menu-item-65" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65"><a href="">Events</a><span>/</span></li>
</ul>				
								<ul class="top-right-nav clearfix">
					
										<li class="phone-icon">BVRIT Hyderabad</li>
										
										<li class="email-icon">bvritvedicproject@gmail.com</li>
									
				</ul>
							
			<!-- END #header-top -->
			</div>
			
			<!-- BEGIN #header-content-wrapper -->
			<div id="header-content-wrapper" class="clearfix">

					
					<div id="logo">
						<h1>
							<a href="">VEDIC <span>Hyderabad</span></a>
						</h1>
<br>
<h3><span>Vishnu Educational Development and Innovation Centre</span></h3>

					</div>
				
				<ul class="social-icons clearfix"> <img src="V.jpg" Style="height: 60px; width: 60px;"></img><li><a href="http://vedic.edu.in/" target="_blank"><span class="twitter-icon"> <h1>&nbsp  V</h1></span></a></li><li><a href="http://vedic.edu.in/" target="_blank"><span class="facebook-icon"> <h1>&nbsp  I</h1></span></a></li><li><a href="http://vedic.edu.in/" target="_blank"><span class="gplus-icon"> <h1>&nbsp  S</h1></span></a></li><li><a href="http://vedic.edu.in/" target="_blank"><span class="pinterest-icon"> <h1>&nbsp  H</h1></span></a></li><li><a href="http://vedic.edu.in/" target="_blank"><span class="flickr-icon"> <h1>&nbsp  N</h1></span></a></li><li><a href="http://vedic.edu.in/" target="_blank"><span class="youtube-icon"> <h1>&nbsp  U</h1></span></a></li><li><a href="http://vedic.edu.in/" target="_blank"><span class="vimeo-icon"> <h1>&nbsp  G</h1></span></a></li><li><a href="http://vedic.edu.in/" target="_blank"><span class="skype-icon"> <h1>&nbsp  R</h1></span></a></li><li><a href="http://vedic.edu.in/" target="_blank"><span class="rss-icon"> <h1>&nbsp  O</h1></span></a></li><li><a href="http://vedic.edu.in/" target="_blank"><span class="rss-icon"> <h1>&nbsp  U</h1></span></a></li><li><a href="http://vedic.edu.in/" target="_blank"><span class="rss-icon"> <h1>&nbsp  P</h1></span></a></li></ul>			
			<!-- END #header-content-wrapper -->
			</div>
		
			<!-- BEGIN #main-menu-wrapper -->
			<div id="main-menu-wrapper" class="clearfix">
				
				<ul id="main-menu" class="sf-js-enabled l_tinynav1"><li id="menu-item-53" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-8 current_page_item menu-item-53"><a href="Main.html">Home</a></li>
<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-48"><a href="1.html" class="sf-with-ul">Assessments<span class="sf-sub-indicator"> »</span></a>
<ul class="sub-menu" style="display: none; visibility: hidden;">

	<li id="menu-item-247" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-247"><a href="1.html">Assessment-1</a></li>
	<li id="menu-item-249" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-249"><a href="2.html">Assessment-2</a></li>
	<li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-251"><a href="3.html">Assessment-3</a></li>
	<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-252"><a href="4.html">Assessment-4</a></li>
	<li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-253"><a href="5.html">Assessment-5</a></li>
	<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-252"><a href="6.html">Assessment-6</a></li>
	<li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-253"><a href="7.html">Assessment-7</a></li>


</ul>
</li>


<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-48"><a href="1.html" class="sf-with-ul">Assessments<span class="sf-sub-indicator"> »</span></a>
<ul class="sub-menu" style="display: none; visibility: hidden;">

	<li id="menu-item-247" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-247"><a href="8.html">Assessment-8</a></li>
	<li id="menu-item-249" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-249"><a href="9.html">Assessment-9</a></li>
	<li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-251"><a href="10.html">Assessment-10</a></li>
	<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-252"><a href="11.html">Assessment-11</a></li>
	<li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-253"><a href="12.html">Assessment-12</a></li>
	<li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-253"><a href="13.html">Assessment-13</a></li>
	<li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-253"><a href="14.html">Assessment-14</a></li>

</ul>
</li>




<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-48"><a href="1.html" class="sf-with-ul">Assessments<span class="sf-sub-indicator"> »</span></a>
<ul class="sub-menu" style="display: none; visibility: hidden;">
	<li id="menu-item-247" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-247"><a href="15.html">Assessment-15</a></li>
	<li id="menu-item-249" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-249"><a href="16.html">Assessment-16</a></li>
	<li id="menu-item-251" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-251"><a href="17.html">Assessment-17</a></li>
	<li id="menu-item-252" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-252"><a href="18.html">Assessment-18</a></li>
	<li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-253"><a href="19.html">Assessment-19</a></li>
	<li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-253"><a href="20.html">Assessment-20</a></li>
	<li id="menu-item-253" class="menu-item menu-item-type-post_type menu-item-object-course menu-item-253"><a href="21.html">Assessment-21</a></li>

</ul>
</li>


<li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a href="events.html">Events</a></li>

<li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a href="gallery.html">Gallery</a></li>


<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a href="contactus.html">Contact</a></li>

</ul><div class="selector" id="uniform-tinynav1" style="width: 175px;"><span style="width: 175px; user-select: none;">Select a page...</span><select id="tinynav1" class="tinynav tinynav1"><option>Select a page...</option><option value="http://themes.quitenicestuff.com/parkcollegewp/">Home</option><option value="http://themes.quitenicestuff.com/parkcollegewp/courses/">Courses »</option><option value="http://themes.quitenicestuff.com/parkcollegewp/course/bsc-food-science/">- BSc Food Science</option><option value="http://themes.quitenicestuff.com/parkcollegewp/course/bsc-biology/">- BSc Biology</option><option value="http://themes.quitenicestuff.com/parkcollegewp/course/ba-politics/">- BA Politics</option><option value="http://themes.quitenicestuff.com/parkcollegewp/course/ba-history-of-art/">- BA History of Art</option><option value="http://themes.quitenicestuff.com/parkcollegewp/course/ba-history/">- BA History</option><option value="http://themes.quitenicestuff.com/parkcollegewp/blog/">Blog</option><option value="http://themes.quitenicestuff.com/parkcollegewp/events/">Events</option><option value="http://themes.quitenicestuff.com/parkcollegewp/features/">Features »</option><option value="http://themes.quitenicestuff.com/parkcollegewp/typography/">- Typography</option><option value="http://themes.quitenicestuff.com/parkcollegewp/portfolio/">- Portfolio</option><option value="http://themes.quitenicestuff.com/parkcollegewp/teacher-style-1/">- Teacher (Style #1)</option><option value="http://themes.quitenicestuff.com/parkcollegewp/teacher-style-2/">- Teacher (Style #2)</option><option value="http://themes.quitenicestuff.com/parkcollegewp/photo-gallery/">- Photo Gallery</option><option value="http://themes.quitenicestuff.com/parkcollegewp/shortcodes/">- Shortcodes »</option><option value="http://themes.quitenicestuff.com/parkcollegewp/accordion-toggle-tabs/">- - Accordion, Toggle &amp; Tabs</option><option value="http://themes.quitenicestuff.com/parkcollegewp/alerts-messages/">- - Alerts &amp; Messages</option><option value="http://themes.quitenicestuff.com/parkcollegewp/buttons-dropcaps-lists/">- - Buttons, Dropcaps &amp; Lists</option><option value="http://themes.quitenicestuff.com/parkcollegewp/columns/">- - Columns</option><option value="http://themes.quitenicestuff.com/parkcollegewp/googlemap/">- - Googlemap</option><option value="http://themes.quitenicestuff.com/parkcollegewp/video/">- - Video</option><option value="http://themes.quitenicestuff.com/parkcollegewp/left-sidebar/">- Left Sidebar</option><option value="http://themes.quitenicestuff.com/parkcollegewp/right-sidebar/">- Right Sidebar</option><option value="http://themes.quitenicestuff.com/parkcollegewp/full-width/">- Full Width</option><option value="http://themes.quitenicestuff.com/parkcollegewp/contact/">Contact</option></select>
</div>				
								
				<div class="menu-search-button"></div>
				<form method="get" action="http://themes.quitenicestuff.com/parkcollegewp/" class="menu-search-form">
					<input class="menu-search-field" type="text" onblur="if(this.value==&#39;&#39;)this.value=&#39;To search, type and hit enter&#39;;" onfocus="if(this.value==&#39;To search, type and hit enter&#39;)this.value=&#39;&#39;;" value="To search, type and hit enter" name="s">
				</form>
				
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form method = "POST">
<table style="width:100%">

<tr>
   <td><center><b>L1 Score</b></center></td>
   <td><center><b>W1 Score</b></center></td>
   <td><center> <b>Average Score</b> </center></td>
   <td> <center><b>Your Interest</b></center></td>
   <td> <center><b>Characterization</b></center></td></tr>
   
   <tr>
<td> <center>A1 <input type = "textarea" cols = "25" rows = "25" name = "q1" id = "que1" value = "<?php echo $values['a1'];?>"></center></td>
<td><center>B1 <input type = "textarea" cols = "25" rows = "25" name = "q2" id = "que2"></center></td>
<td><center>(A1+B1)/2 <input type = "textarea" cols = "25" rows = "25" name = "q3" id = "que3"></center></td>
<td> <center><b>Conventional "The Organizers"</b></center> </td>
<td> Conventional orientation people generally like to be involved in activities that follow set procedures and routines. They like to work with data and details, have clerical or numerical ability, carry out tasks in great detail. They are often described as being conforming, practical, careful, obedient, thrifty, efficient, orderly, conscientious, and persistent. They often prefer orderly, systematic work. Their work tasks often include keeping records, and organizing written and numerical materials according to a plan. They like to see things run efficiently and smoothly which means they will pay attention to administrative details. They generally enjoy keeping accurate records, organizing, working with numbers, and using a computer.  </td>
</tr>
<tr>
<td> <center>A2 <input type = "textarea" cols = "25" rows = "25" name = "q4" id = "que4"></center></td>
<td><center>B2 <input type = "textarea" cols = "25" rows = "25" name = "q5" id = "que5"></center></td>
<td><center>(A2+B2)/2 <input type = "textarea" cols = "25" rows = "25" name = "q6" id = "que6"></center></td>
<td> <center><b>Realistic "The doers"</b></center> </td>
<td><b>Realistic</b>Orientation people generally prefer hands-on activities,and tend to focus on things in the physical world.They typically enjoy working with tools or machines,and often gravitate towards careers that can be performed outdoors.They are often described as being frank,genuine,humble,practical,natural,and persistent.<br>
People in the realistic category often prefer to work with objects and things.They are likely to enjoy creating things with their hands and using tools and machines.some prefer large,powerful machines like tractors,while other prefer precision machinery such as X-ray or electronic equipment.People in this category generally enjoy being physical active,repairing equipment,rebuilding cars,fixing electric things,solving mechanical problems,playing sports,working outdoors etc.,
<tr>
<td> <center>A3 <input type = "textarea" cols = "25" rows = "25" name = "q7" id = "que7"></center></td>
<td><center>B3 <input type = "textarea" cols = "25" rows = "25" name = "q8" id = "que8"></center></td>
<td><center>(A3+B3)/2 <input type = "textarea" cols = "25" rows = "25" name = "q9" id = "que9"></center></td>
<td> <center><b>Investigative "The thinkers"</b></center> </td>
<td><b>Investigative </b> Orientation people like to be involved in activities that have to do with ideas and thinking; these are people who like to observe, learn, investigate, analyse, evaluate, or solve problems. They like to search for facts anf figure out problems mentally. They prefer working with ideas rather than with people or things.<br>
They often described as being analytical, curious, methodical, rational, cautious, independent, precise, reserved, complex, intellectual, and modest. People in the investigate category often have a strong desire to understand cause and effect, and solve puzzles and problems. They often work in jobs that are scientific in nature. They work often involves analysis of data using formulas, graphs and numbers. Investigate types typically refer to work independently, 
and with minimum supervision. People in this category generally enjoy using computers, solving math problems, interpreting formulas and thinking abstractly.</td>
</tr>


<tr>
<td> <center>A4 <input type = "textarea" cols = "25" rows = "25" name = "q10" id = "que10"></center></td>
<td><center>B4 <input type = "textarea" cols = "25" rows = "25" name = "q11" id = "que11"></center></td>
<td><center>(A4+B4)/2 <input type = "textarea" cols = "25" rows = "25" name = "q12" id = "que12"></center></td>
<td> <center><b>Leading "The Persuaders"</b></center> </td>
<td><b>Leading </b> orientation people like to influence others.They tend to enjoy persuading others to see their point of view. 
They often like work with people and ideas, rather than things.They are often described as being adventurous. Energetic, Optimistic, aggreable, extroverted, popular, sociable, self-confident,
and ambitious.<br> People in the enterprising category often prefer activities selling and promoting. They enjoy influencing others and being in a leadership position. 
They often use their skills to influence others. They often like competitive activities and are often self-confident, talkative and energetic.
They generally enjoy discussing policies, selling and promoting, having power and status, giving talks and speeches, and leading groups.</td>
</tr>
<tr>
<td> <center>A5 <input type = "textarea" cols = "25" rows = "25" name = "q13" id = "que13"></center></td>
<td><center>B5 <input type = "textarea" cols = "25" rows = "25" name = "q14" id = "que14"></center></td>
<td><center>(A5+B5)/2 <input type = "textarea" cols = "25" rows = "25" name = "q15" id = "que15"></center></td>
<td> <center><b>Artistic "The Creators"</b></center> </td>
<td><b>Artistic</b> orientation people tend to be creative and intuitive, and enjoy activities like writing, painting, sculpturing,
playing a musical instrument, performing etc. They enjoy working in an unstructured environment where they can use imagination and creativity.
They are more often described as being: open, imaginative, original, intuitive, emotional, independent, idealistic, and unconventional.
people in the artistic category prefer to be expressive. They like the opportunity to create new things and be innovative. They typically donot like 
structure or conformity. They prefer to use their imagination and be creative. People in this category generally enjoy activities such 
as writing, poetry, photography, designing, singing, acting, dancing, painting, attending theaters, and exhibits, and reading.</td>
</tr>

<tr>
<td> <center>A6 <input type = "textarea" cols = "25" rows = "25" name = "q16" id = "que16"></center></td>
<td><center>B6 <input type = "textarea" cols = "25" rows = "25" name = "q17" id = "que17"></center></td>
<td><center>(A6+B6)/2 <input type = "textarea" cols = "25" rows = "25" name = "q18" id = "que18"></center></td>
<td> <center><b>Social "The helpers"</b></center> </td>
<td><b>Social</b> orientation people enjoy helping and advising people. They tend to be concerned about other peoples welfare.
They promote learning and personal development and are very interested in human relationships. They are often described as being helpful,responsible,
warm, cooperative, idealistic, sociable, tactful, friendly, kind, sympathetic, generous, patient, and understanding.<br> people in the
social category prefer to work with others. They tend to be highly verbal, express themselves well, and get along well in groups.
Social types typically prefer the team approach to problem solving. People in social category often describe themselves as cooperative, friendly and understanding.
 They generally enjoy teaching, caring for others, volunteering, mediating disputes, meeting new people, and working in groups.</td>
 </tr>





</table>
<br>
<br>

</form>
  
<center>




<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 




<center>
	<div class="header-block-wrapper clearfix">
		<div class="header-block-inner">
			<a href="http://vedic.edu.in/" class="header-block-5 header-block-style-1 clearfix" style="background: #209B60"><img src="./header_icon_01.png" alt=""><h2> VEDIC </h2></a><a href="Vedic.html" class="header-block-5 header-block-style-1 clearfix" style="background: #198752"><img src="./header_icon_022.png" alt=""><h2>Assessments</h2></a><a href="Assessments.html" class="header-block-5 header-block-style-1 clearfix" style="background: #107243"><img src="./header_icon_03.png" alt=""><h2>Feedback</h2></a><a href="Feedback.html" class="header-block-5 header-block-style-1 clearfix" style="background: #065F34"><img src="./header_icon_04.png" alt=""><h2>Location</h2></a><a href="Society.html" class="header-block-5 header-block-style-1 clearfix" style="background: #034B29"><img src="./header_icon_05.png" alt=""><h2>SoCiety</h2></a>		
			</div>
	</div>


<br> 
<br> 
<br> 
<br> 
<br> 
<br> 
<br> 


			<!-- BEGIN #footer-bottom -->
			<div id="footer-bottom" class="header-block-wrapper clearfix">
				
									<p class="fl">© Copyright - <a href="">Vedic</a> by <a href="">BVRIT</a></p>
								
				<p class="go-up fr">
					<a class="scrollup" href="http://themes.quitenicestuff.com/parkcollegewp/#top">Top</a>
				</p>
	
			<!-- END #footer-bottom -->
			</div>
			
			<!-- END #footer -->
			</div>

		<!-- END #footer-wrapper -->
		</div>
</center>


		<script type="text/javascript" src="./jquery.form.min.js.download"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/themes.quitenicestuff.com\/parkcollegewp\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
/* ]]> */
</script>
<script type="text/javascript" src="./scripts.js.download"></script>
<script type="text/javascript" src="./jquery-ui.min.js.download"></script>
<script type="text/javascript" src="./tinynav.min.js.download"></script>
<script type="text/javascript" src="./jquery.uniform.js.download"></script>
<script type="text/javascript" src="./superfish.js.download"></script>
<script type="text/javascript" src="./jquery.prettyPhoto.js.download"></script>
<script type="text/javascript" src="./jquery.flexslider-min.js.download"></script>
<script type="text/javascript" src="./scripts.js(1).download"></script>

</div>
</body>
</html>