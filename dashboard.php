<!DOCTYPE html>
<html>
<head>
	<title></title>
<script>
		function clk(){
			document.getElementById("main").style.display="none";
		}
	</script>


	<style type="text/css">
		body{
			margin: 0px;
			padding: 0px;

			background-image: url(img/hospital2.jpg);
			background-size: 100% ,100%;
			background-repeat: no-repeat;
		}
		.container{
			width: 100%;
			height: auto;
       }
       .header1{
       	background: #ee5253;
       	width: 100%;
       	height: 78px;
       	position: fixed;
       	z-index: 10;
       }
       #sidebarMenu{
       	height: 100%;
       	position: fixed;
       	left: 0px;
       	top: 0px;
       	width: 250px;
       	margin-top: 60px;
       	background: #2e86de;
       	transform:translateX(-250px);
      

       }
         #openSidebarMenu:checked ~#sidebarMenu{
         	transform: translateX(0px);
         }

       .menu{
       	list-style: none;
       	padding:0px;
       	margin: 0px;
       }
       .menu li{
       	color: #fff;
       	border-bottom:1px solid rgba(255,255,255,0.5);

       	
       }
       .menu li a{
       	color: #fff;
       	display: block;
       	text-decoration: none;
       	text-transform: uppercase;
       	padding: 20px;
       	
       }
       .sidebarIconToggle{
       	width: 22px;
       	height: 22px;
       	position: fixed;
       	z-index: 20;
       	top:20px;
       	left: 20px;
       	cursor: pointer;
       }
       .main2 h1{
       	margin: 0px 0px 0px 40px;
       	background-color: rgb(0,0,0,0.5);
       	padding: 0px 0px 0px 70px;
       	color: lightgreen;

       }
       
  

        


	/*	.main{
			width: 100%;
			height: 550px;
			background-image: url(doctors.png);
			background-size: 100% 100%;
			background-repeat: no-repeat;
			
		}*/
		.main2{
			width: 500px; 
			height: 300px;
			
			margin: 70px 0px 0px 450px;
			 	background-color: rgb(1,0,0,0.6);
			border-radius: 30px;


		}
		.main2 p{
			font-size: 40px;
			text-align: center;
			font-weight: bold;
			margin: -10px 0px 0px 0px ;
			color: blue;
		}
		.main2 p1{
			font-size: 15px;
			margin: 10px 0px 0px 30px;
			color: white;
		
		
				
		}
		.main3 input[type="submit"]{
			font-size: 15px;
			margin: 10px 0px 0px 100px;
			background: blue;
			color: white;
			padding: 15px;
			text-decoration: none;
		
		}
		.main3 select{
			width: 300px;
			font-size: 18px;
			margin: 0px 0px 0px 50px;
			height: 50px;
			background:white;
			border: 1px solid blue;
			color: blue;

		}
		
	

	.header1 p{
			margin: 20px 0px 10px 230px;
			font-size: 23px;
			font-weight: bold;
			color: black;
		}
		.header1 .pic img{
			
			
			border: 6px solid black;
			margin: -54px 0px 0px 120px;
			border-radius: 25px;
			
		}
	


			 .spinner{
       	height: 3px;
       	background:white;
       	transition: all 0.3s;
       }
       .spinner.middle,.spinner.bottom{
       	margin-top: 3px;
       }
       #openSidebarMenu:checked ~ .sidebarIconToggle >.spinner.middle{
       	opacity: 0;

       }
        #openSidebarMenu:checked ~ .sidebarIconToggle >.spinner.top{
        	transform: rotate(135deg);
        	margin-top:8px;}

         #openSidebarMenu:checked ~ .sidebarIconToggle >.spinner.bottom{
         	transform: rotate(-135deg);
        	margin-top:-8px;}

        	.logo{
        		padding: 20px 0px 0px 10px;
        	}
        .header1 .logout{
        	float: left;
        	margin: -60px 0px 0px 1400px;
        }
        .logout a{
        	text-decoration: none;
        	font-size: 20px;
        	background: blue;
        	color: white;
        	padding: 12px;
        }

		

	</style>
</head>
<body><div class="container">
	          <div class="header1"><p>
		<?php 
		session_start();
		if($_SESSION["pemail"]==null)
		{
			header("location:login.php");
		}
		else{
			echo $_SESSION["pemail"];
		}
		?>
	</p>
    

		<div class="pic">
			<img src="uploadfile/<?php echo $_SESSION['pphoto'];?>" height="70px" width="80px"></img>
		</div>
		

    </div>
	<input type="checkbox" id="openSidebarMenu">
	<label for="openSidebarMenu" class="sidebarIconToggle">
		<div class="spinner top"></div>
		<div class="spinner middle"></div>
		<div class="spinner bottom"></div>
	</label>

	<div id="sidebarMenu">
		<div class="logo"><img src="img/logo.jpg" width="100px" height="100px"></div>
		<ul class="menu">
			<li><a href="http://localhost/Hospitalmangement/dashboard.php" >Dashboard</a></li>
			<li><a href="http://localhost/Hospitalmangement/apointment.php" onclick="clk()">Appointment</a></li>
			<li><a href="home.php">Logout</a></li>
			
		</ul>

		
			
		</div>
		<div class="main2" id="main"><h1> Welcome to Hospital</h1><br><br><br><br>
	<p>Making Helth<br> Care Better Together</p><br>
	<p1> Also you dry creepin beast multiply fourth abundantly our itsel signs bring</p1><p1> our .won form living. Whose dry you seasons divide given gathering great </p1><p1>in whose you'll greater let liven form beast sinthets better together these place  </p1><p1> absolute right.</p1>
</div>
	</div>


	
</body>
</html>

		

	
		
	
	
	
	


	
