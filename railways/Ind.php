<HTML>
<HEAD>
<TITLE>...Indian Railways...</TITLE>
<style type="text/css">
@import url(style.css);

*	{
	color: orange;
}
html { 
  background: url(img/bg3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
#main	{
		width:700px;
		height: 400px;
		margin: 0 auto;
		margin-top: 30px;
		color:white;
		
  		padding-top: 10px;
    	padding-right: 10px;
    	padding-bottom: 10px;
    	padding-left: 10px;
    	background-color: rgba(0,0,0,0.3);
	}
</style>
</HEAD>
<BODY>
<?php 
session_start();
include("head.php"); ?>
<div id="main"><div id="logo">
<A HREF="ind.php">

</A></div>
<h1 align="center">...Welcome to Indian Railways...</h1><br/><br/><br/>
<h2 align="center">...Have a happy & safe journey... </h2>
<br/><br/><br/>
<?php
if(isset($_SESSION['user_info']))
	echo '<h3 align="center"><a href="bktic.php">Book  here</a></h3>';
else
  echo '<h3 align="center"><a href="reg.php">Please register/login before booking</a></h3>';


?>
</div>
</BODY>
</HTML>


