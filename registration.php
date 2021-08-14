<!DOCTYPE html>
<html>
<head>
	<title>form</title>
	<style type="text/css">
		*{
			box-sizing: border-box;
			padding: 0px;
			margin: 0px;
		}
		.container{
			width: 100%;
			height: 1400px;
			background: #605D66 ;
			
			background-image:url(img/hospital.jpg);
			background-size:100% 100%;
			background-repeat: no-repeat;

		 			
			

			
			
			/*(background-image: linear-gradient(to bottom  right ,red, green);*/


		}
		.box{
			width: 500px;
			height:auto;
			
			background: blue ;
			margin:0px 0px 10px 500px;
			border-radius: 6px;
			opacity: 0.8;

			



		}
		.row1{
			width: 500px;
			height:50px;
			background: red;
			border-radius: 6px;



		}
		.row1 p{
			font-size: 30px;
			margin:15px 0px 0px 85px;
			padding: 10px;

			color: white;
		}
		.row2 p{
			font-size: 25px;
			margin:8px 0px 0px 20px;
			color: white;

		}
		input[type="text"],[type="password"],[type="file"],[type="date"]
		{
			width: 450px;
			height: 34px;
			margin:10px 0px 0px 20px;
			
			font-size: 17px; 
		

		}
	    textarea{
	    	width: 450px;
			height: 70px;
			margin:10px 0px 0px 20px;
			font-size: 17px;
			

	    }
	    select{
	    	width: 450px;
			height: 34px;
			margin:10px 0px 0px 20px;
			font-size: 17px;
			

	    }
	    input[type="radio"]{
	    	width: 20px;
	    	height: 20px;
	    	margin: 10px 0px 0px 20px ;
	    	color: white
	    }
		span{
			font-size: 20px;
			color: white;
		}

	

		
		.sub {
			margin: 20px 0px 0px 20px ;
		
		    width: 400px;
		    height: 100px;
		}
		
		
		input[type="submit"]{
			width: 150px;
			height: 40px;
			text-transform: uppercase;
			margin: 30px 0px 0px 130px;
			
			border-radius: 6px;
			background:black  ;
			color: white;
			letter-spacing: 1px;


		}
		
			
		.note
		{
			
		
		width: 500px;
		height: 100px;
		border: 1px solid transparent;
		margin: 0px 0px 0px 500px;
	   background-image: url(docter5.png);
	   background-size: 100% 100%;
	   background-repeat: no-repeat;
	   border-radius: 30px;
	   opacity: 0.9;
	   padding-top: 25px;

		}
		.note p{
			text-align: center;
			font-size: 35px;
			font-weight: bold;
			color: white; 
			text-shadow: 1px 1px grey;
			margin-top: 0px;
			background-image: linear-gradient(to top , blue , white);


			

			
		}
		.note span{
			color :red;

		}
		.mark{
			margin: 20px 0px 0px 20px ;
			color: white;
			font-size: 17px;
		}
		.mark input[type="checkbox"]{
			margin-right: 5px;
			width: 20px;
			height: 20px;
			


		}
		.aa{
			margin:0px 0px 0px 180px;
		
			width: 100px ;
			height: 100px;
		}
		a{
			
			color: white;
			text-decoration: none;
			font-size: 20px;
			background: red;
			padding:10px;
		}

		
	</style>
	<script type="text/javascript">
		function validate()
		{
			if( document.f1.eml.value=="")
				{
					alert("blank Your email");
					return false;

				}
				else if(document.f1.pass.value=="")
					{
						alert("Blank Your Password")
						return false;
					}
					else if(document.f1.pass.value.length<7)
					{
						alert("Password too short <br>max 7 charecter ");
						return false;

					}
					else{
						return true;
					}
			


		}

		
	</script>
</head>
<body>
	<form method="post" enctype="multipart/form-data"  name="f1" onsubmit="return validate()">
	<div class="container">
		<div class="note"><p> <span > +</span>YOUR HOSPITAL<span > +</span></p>
		</div>
		<form>
			<div class="box">
				<div class="row1"><p> Pateint's Registraton Form</p>
				</div>
			
			
					
				<div class="row2"><p>	 Email.</p>
					<input type="text" name="eml" placeholder="Your email" ></div>
					
					<div class="row2"><p>  Full Name</p>
						<input type="text" name="txtnm" placeholder="Your name">
					</div>
					
					<div class="row2"><p>  Password</p>
						<input type="password" name="pass" placeholder="Password">
					</div>
					<div class="row2"><p> Address</p>
						<textarea name="addr" placeholder="Your address"></textarea>
						
					</div>
					<div class="row2"><p>Gender</p>
						<input type="radio" name="gender" value="Male"><span>Male</span>
						<input type="radio" name="gender" value="female"><span>female</span></div>

					<div class="row2"><p>Phone</p>
						<input type="text" name="phon" placeholder="Your phone">
					</div>
					
					<div class="row2"><p> Date of Birth</p>
						<input type="date" name="dbirth">
					</div>
					


					
					<div class="row2"><p> Photo</p>
						<input type="file" name="photo">
					</div>
					<div class="row2"><p>Diseases</p>
						<select name="dis">
							<option>Select Diseases</option>
							<option>canser</option>
							<option>turbo closis</option>
							<option>Typhyide</option>
							<option>Heart peteint</option>
							<option>Blude related diseases</option>
							<option>maleriya</option>
							<option>Covid 19</option>
							<option>Other diseases</option>

						</select>
					</div>

					<div class="mark"><input type="checkbox" name="aa">I agree to the Terms of user</div>

					
					
					

					<div class="sub"><input type="submit" name="sub" value="SIGN UP" ></div>
					<div class="aa"><a href="login.php">Sign in</a></div>
				</div> 
			
			
		</form>
	
	</div>  

	<?php 
	if(isset($_POST["sub"]))
	{
		$a=$_POST["eml"];
		$b=$_POST["txtnm"];
		$c=$_POST["pass"];
		$d=$_POST["addr"];
		$e=$_POST["gender"];
		$f=$_POST["phon"];
		$g=$_POST["dbirth"];
		$h=$_FILES["photo"]["name"];

	

		$i=$_POST["dis"];

		echo "file name".$h;
		echo"<br>";
		$temp_file=$_FILES["photo"]["tmp_name"];
		echo "temporary file".$temp_file;
	 move_uploaded_file($temp_file,"uploadfile/".$h);



	 $con=mysqli_connect(
	 	"b5uuer3xqab9cvwg0iap-mysql.services.clever-cloud.com:3306",
	 	"ufyluufbw26h2ss7",
	 	"uebWsma5UZqWBl9AaZ6k",
	 	"b5uuer3xqab9cvwg0iap"
	 );

	  if($con)
	  {
	  	$q="INSERT INTO `patient`(`pemail`, `pname`, `ppassword`, `paddress`, `pgender`, `pphone`, `pdob`, `pphoto`, `pdisease`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i');";
	  	$r=mysqli_query($con,$q);
	  	if($r)
	  	{
	  		echo "Pateint data connect";

	  	}
	  	else{
	  		echo "Pateint data not connect";
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