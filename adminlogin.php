<html>
	<?php 
		session_start();
		include "head.php";
		include "config.php";
	?>
<body>
<div class="row">
	<div class="col-md-12">
		<?php include "nav.php";?>
	</div>
</div>

<div class="col-md-12">
	<p class="fs-1 text-center fw-bolder">WELCOME <span style="color:blue">ADMIN</span>..!</p>
</div>
<div class="col-md-offset-4 col-md-4">
<div class="mt-5 rounded-5" style="border:solid 1px silver; background:linear-gradient(to top left,blue,white)" id="zoom"><br>
		<!--h1 class="text-center" style='color:black; font-size:50px; letter-spacing:1px' ><b>UMIS</b></h1-->
		<img src="img/umis.png" style="height:80px; width:160px; margin-left:120px">
		<form method="post" action="adminlogin.php"><br>
		<div class="form-group col-md-12"><br>
			<label class="fs-2" style='color:blue;'>Admin Name : </label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Username" name="ad_name"><br><br>
		</div>
		<div class="form-group col-md-12">
			<label class="fs-2" style='color:blue;'>Password : </label>
			<input type="password" class="form-control fs-4" placeholder="Enter Your Password" name="ad_password"><br><br>
		</div>
		
		<center>
			<button class="p-3 fs-4 text-white fw-bolder rounded-pill" style="background:blue;" name="submit">LOGIN</button>
		</center>
		
	   </form>
	   <?php
		//print_r($_POST);
		if(isset($_POST["submit"]))
		{
			$sql="select * from admin_info where ad_name='{$_POST["ad_name"]}' and ad_password='{$_POST["ad_password"]}'";
			//echo $sql;
			$res=$con->query($sql);
			if($res->num_rows>0)
			{
				$rec=$res->fetch_assoc();
				print_r($rec);
				session_start();
				$_SESSION["ad_id"]=$rec["ad_id"];
				$_SESSION["ad_name"]=$rec["ad_name"];
				header("location:student_login.php?ad_id={$rec["ad_id"]}");
			}
			else
			{
				echo "<script>alert('Invalid Username or Password');</script>";
			}
		}
		?>
	</div>
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>	
</div>
</html>