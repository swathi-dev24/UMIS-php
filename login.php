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
	<p class="fs-1 text-center fw-bolder">WELCOME TO<span style="color:blue"> STUDENT </span>LOGIN PAGE..!</p>
</div>
<div class="col-md-offset-4 col-md-4">
	<div class="mt-5 rounded-5" style="border:solid 1px silver; background:linear-gradient(to top left,blue,white)" id="zoom" id="zoom"><br>
		<img src="img/umis.png" style="height:80px; width:160px; margin-left:110px">
		<form method="post" action="login.php">
		<div class="form-group col-md-12"><br>
			<label  class="fs-2" style='color:blue;'>User Name : </label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Username" name="sname"><br><br>
		</div>
		<div class="form-group col-md-12">
			<label  class="fs-2" style='color:blue;'>Password : </label>
			<input type="password" class="form-control fs-4" placeholder="Enter Your Password" name="password"><br><br>
		</div>
		<center>
			<button class="p-3 fs-4 text-white fw-bold rounded-pill" style="background:blue;" name="submit">LOGIN</button>
		</center>
		<div class="form-group col-md-offset-6 col-md-6 first-login"><br>
			<a href="newuser.php" class="text-decoration-none"><p class="fs-4 text-danger fw-bold">First Time Student Login?</p></a>
		</div>
	   </form>
	   <?php
		//print_r($_POST);
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
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>