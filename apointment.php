<?php
include("dashboard.php");
?>

<div class="main3" style="margin:15px 0px 10px 480px; padding: 20px; background: greenyellow; width: 400px;">
	<form method="post" enctype="multipart/form-data" name="f2">
		<p style="font-size: 20px; text-align: center;font-weight: bold;">Doctors with Specialist</p>
		<select name="txtdocname" >

		<?php
		$con=mysqli_connect(
             "b5uuer3xqab9cvwg0iap-mysql.services.clever-cloud.com:3306",
	 	     "ufyluufbw26h2ss7",
	 	    "uebWsma5UZqWBl9AaZ6k",
	 	     "b5uuer3xqab9cvwg0iap"


		);


		$q="select * from doctors";
		$r=mysqli_query($con,$q);
		echo "<option>Select Doctors</option>";
		while($f=mysqli_fetch_array($r))
		{
			echo"<br>
			<option>$f[0]</option>";

		}
		?>
		
	</select>
	<?php
	mysqli_close($con);
	?>

		
		<input type="submit" name="btn1" value="Make an Appointment">
	</form>
	<?php
	if(isset($_POST["btn1"]))
	{
		$con=mysqli_connect(
          "b5uuer3xqab9cvwg0iap-mysql.services.clever-cloud.com:3306",
	 	  "ufyluufbw26h2ss7",
	 	  "uebWsma5UZqWBl9AaZ6k",
	 	  "b5uuer3xqab9cvwg0iap"

		);
		$docname=$_POST["txtdocname"];
		$pemail=$_SESSION["pemail"];

		
		$q="update doctors set pemail='$pemail' where dname='$docname'";
		$r=mysqli_query($con,$q);
		if($r)
		{
			echo "Appointment enlisted";
		}
		else
		{
			echo "Appointment  not elisted";
		}
	}
	  
	?>


</div>

		
		