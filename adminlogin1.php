<html>
	<?php include "head.php";
		include "config.php";
	?>
<body style="background:silver">
<div class="col-md-12">
<?php include "nav.php";?>
</div>
<div style="margin-top:150px;background:white;  border-radius:10px" class="col-md-offset-1 col-md-4" id="zoom"><br>
		<h1 class="text-center" style='color:black; font-size:50px; letter-spacing:1px'><b>UMIS</b></h1>
		<form method="post" action="login.php">
		<div class="form-group col-md-12"><br>
			<label style='color:black; font-size:18px; font-family:Calibri;'>User Name : </label>
			<input type="text" class="form-control" placeholder="Enter Your Username" name="sname"><br><br>
		</div>
		<div class="form-group col-md-12">
			<label style='color:black; font-size:18px; font-family:Calibri;'>Password : </label>
			<input type="password" class="form-control" placeholder="Enter Your Password" name="password"><br><br>
		</div>
		<center>
		<input type="submit" style='border-radius:20px; background:blue; font-weight:bold; color:white; padding:10px' value="LOGIN" name="submit">
		</a>
		</center>
		<div class="form-group col-md-offset-7 col-md-5"><br>
				<a href="newuser.php"><font size="2px" color="red" face="Calibri"><b>First Time Student Login?</b></font></a>
		</div>
	   </form>
	   <?php
		print_r($_POST);
		if(isset($_POST["submit"]))
		{
			$sql="select * from umis_info where sname='{$_POST["sname"]}' and password='{$_POST["password"]}'";
			//echo $sql;
			$res=$con->query($sql);
			if($res->num_rows>0)
			{
				$rec=$res->fetch_assoc();
				print_r($rec);
				session_start();
				$_SESSION["uid"]=$rec["uid"];
				$_SESSION["sname"]=$rec["sname"];
				header("location:login1.php?uid={$rec["uid"]}");
			}
			else
			{
				echo "<h1>Invalid username and password</h1>";
			}
		}
		?>
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>