<?php 
session_start();
	if(empty($_SESSION['user_info'])){
		echo "<script type='text/javascript'>alert('Please login before proceeding further!');</script>";
	}
$conn = mysqli_connect("localhost","root","","railways");
if(!$conn){  
	echo "<script type='text/javascript'>alert('Database failed');</script>";
  	die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$trains=$_POST['trains'];
$sql = "SELECT t_no FROM trains WHERE t_name = '$trains'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$email=$_SESSION['user_info'];
$query="UPDATE passengers SET t_no='$row[t_no]' WHERE email='$email';";
	if(mysqli_query($conn, $query))
{  
	$message = "Ticket booked successfully";
}
	else {
		$message="Transaction failed";
	}
	echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reserve a train ticket</title>
	<LINK REL="STYLESHEET" HREF="STYLE.CSS">
	<style type="text/css">
		#bktic	{
			
		margin:auto;
			
			width: 40%;
			height: 60%;
			padding: auto;
			padding-top: 50px;
			padding-left: 50px;
			background-color: rgba(0,0,0,0.3);
			
		}
		html { 
		  background: url(img/bg3.jpg) no-repeat center center fixed; 
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}
		#journeytext	{
			color: white;
			font-size: 28px;
			font-family:"Comic Sans MS", cursive, sans-serif;
		}
		#trains	{
			
			font-size: 15px;
		}
		#submit	{
			margin-left: 150px;
			margin-bottom: 50px;
			margin-top: 40px;
		}
	</style>
	<script type="text/javascript">
		function validate()	{
			var trains=document.getElementById("trains");
			if(trains.selectedIndex==0)
			{
				alert("Please select your train");
				trains.focus();
				return false;		
			}
		}
	</script>
</head>
<body>
	<?php
		include ('head.php');
	?>
	<div id="bktic">
	<h1 align="center" id="journeytext">Choose your expedition </h1><br/><br/>
	<form method="post" name="journeyform" onsubmit="return validate()">
		<select id="trains" name="trains" required>
			<option selected disabled>    Select your destination     </option>
			<option value="adi varanasi" >Adi Varanasi Express- Ahmedabad Junction to Varanasi Junction</option>
			<option value="pune ami" >Pune Ami Express-Pune Junction to Amravati</option>
			<option value="anantapuri">Anantapuri Express- Chennai Egmore to Trivandrum Cntl</option>
			<option value="andhra pradesh" >Andhra Pradesh Express- New Delhi to Vishakapatnam</option>
			<option value="mysore" >Mysore Express - Talguppa to Mysore Jn</option>
		</select>
		<br/><br/>
		<input type="submit" name="submit" id="submit" class="button" />
	</form>
	</div>
	</body>
	</html>
