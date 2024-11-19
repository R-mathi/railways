<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="s1.css" type="text/css">
<style type="text/css">
	li {
		font-family: sans-serif;
		font-size:18px;
	}
</style>
<script src="jquery.js"></script>
        <script>
            $(document).ready(function(){
              $("#Logout").hide();
            };
            $(document).ready(function(){
                $("#user").hover(function(){
                    $("#Logout").toggle("slow");
                });
            });
        </script>
</head>
<body link="white" alink="white" vlink="white">
     <div class="container dark">
        <div class="wrapper">
          <div class="Menu">
            <ul id="navmenu">
            <li><A HREF="ind.php">Home Page</A></li>
            <li><A HREF="pnr.php">PNR Verification</A></li>
            <li><a href="bktic.php">Reserve a train ticket</a></li>
			<li><a href="deacti.php">Deactivate Account</a></li>
			<li><a href="chngpwd.php">Change Password</a></li>
            <li><?php  
				if(isset($_SESSION['login/register'])){
					echo '<div id="dropdown">'.$_SESSION['user_info'].'<div id="Logout" style="display:none">Logout</div>';
        }
				else
					echo '<A HREF="reg.php">Login/Register</A>';
				?>
			</li>
            </ul>
          </div>
        </div>
      </div>
</body>
</html>

