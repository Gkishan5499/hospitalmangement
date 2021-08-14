<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			box-sizing: border-box;
			padding: 0px;
			margin: 0px;
		}
		.container{
			width: 100%;
			height: 800px;
			background-image:url(img/hospital.jpg);
			background-size:100% 100%;
			background-repeat: no-repeat;
			 background-color: rgb(0,0,0);
		 			background-color: rgba(0,0,0,0.7);
	


		}
		.box{
			width: 500px;
			height: 500px;
			
		
			margin:40px 0px 0px 500px;
			border-radius: 15px;
			
			background-color: rgb(0,0,0);
		 			background-color: rgba(0,0,0,0.7);
	


		}
		.row1{
			width: 500px;
			height:50px;
	
			border-radius: 6px;
			background: transparent;
		}
		.row1 p{
			font-size: 30px;
			margin:6px 0px 0px 180px;
			padding: 10px;
			font-weight: bold;


			color:green;
			
		}
		.row2 p{
			font-size: 20px;
			margin:28px 0px 0px 20px;
			color:white;


		}
		input[type="text"],[type="password"]
		{
			width: 450px;
			height: 40px;
			margin:10px 0px 0px 20px;
			border: 0px  solid transparent;
			border-bottom:3px solid green;
		
		 			background-color: rgba(0,0,0,0.1);
			
			font-size: 17px; 
			font-color:white;
			color: white;
		

		}
		
		
		.btnone{
			width:160px;
			height: 30px;
			text-transform: uppercase;
			margin: 75px 0px 0px 130px;
			border-radius: 6px;
			background:green ;
		
			color: #FBFAFC ;
			font-weight: bold;
			padding: 0px 15px 0px 8px;


		}
	

		
		.note
		{
			
		width: 500px;
		height: 100px;
		border: 1px solid transparent;
		margin: 0px 0px 0px 500px;

		}
		.note p{
			text-align: center;
			font-size: 35px;
			font-weight:bold;
			color: green ;
			text-shadow: 1px 1px grey;
			margin: 40px 0px 0px 0px 
			
		}
		.check li{
			margin: 30px 0px -20px 20px;
			color: white;text-shadow: 1px 1px grey;

		}
		.check span{
			color: green;
			font-weight: bold;
			text-shadow: 1px 1px transparent;


		}
		a{
			color: white;
			font-size: 18px;
			text-decoration: none;
			margin-left: 10px;


		}
			a:hover{
				color: red;
			}
	</style>

</head>
<body>
	<form  name="f1" method="post" onsubmit="return xyz()">
	<div class="container">
		<div class="note"><p>WELCOME TO YOUR HOSPITAL</p></div>
		<form>
			<div class="box">
				<div class="row1"><p>Login</p>
				</div>
			
				<div class="row2"><p>	Username/Email</p>
					<input type="text" name="eml"  placeholder="Username/Email" ></div>
					
					
					<div class="row2"><p>Password</p>
						<input type="password" name="pass" placeholder="Password">
					</div>

					
					
						
					<input class="btnone" type="submit" name="btn" value="LOGIN NOW">
					<script type="text/javascript">
						function xyz()
						{
							if(document.f1.eml.value=="")
							{
								alert("Email should not be blank");
								return false;

							}
							else if(document.f1.pass.value=="")
							{
								alert("Passowrd should not be blank");
								return false;

							}
							
							else{
								return true;
							}
							
						}
					</script>
					<a href="home.php">NEW USER</a>
					<div class="check"><li>Forgot<span> Username/Password</span></li>
						<li>Don't have an account? <span>Sign up</span></li></div>
				</div>
			</form>
			<?php
			if(isset($_POST["btn"]))
			{
				$a=$_POST["eml"];
				$c=$_POST["pass"];

				 $con=mysqli_connect(
				 	"b5uuer3xqab9cvwg0iap-mysql.services.clever-cloud.com:3306",
	 	            "ufyluufbw26h2ss7",
	 	            "uebWsma5UZqWBl9AaZ6k",
	 	             "b5uuer3xqab9cvwg0iap"
				 );
				 if($con)
				 {
				 	$q="SELECT * FROM `patients` WHERE pemail='$a' and ppassword='$c'";
				 	$r=mysqli_query($con,$q);
				 	$z=mysqli_num_rows($r);
				 	if($z>0)
				 	{
				 		session_start();
				 		$_SESSION["pemail"]=$a;
				 		while($x=mysqli_fetch_array($r))
				 		{
				 			$h=$x[7];
				 		}
				 		$_SESSION["pphoto"]=$h;
				 		header("location:dashboard.php");

				 	}
				 	else{
				 		echo "invalid login";
				 	}
				 }
				 else
				 {
				 	echo "not connect";
				 }
				 mysqli_close($con);
			}
			?>



</body>
</html>