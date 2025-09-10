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
	<p class="fs-1 text-center fw-bolder">WELCOME TO<span style="color:blue"> STUDENTS </span>PAGE..!</p>
	<p class="fs-5 text-center">( Click below link to see all students Username and Password )</p>
	<a href="#table"><p class="fs-4 text-center">Click</p></a>
</div>

<div class="col-md-offset-4 col-md-4">
<div class="mt-5 rounded-5" style="border:solid 2px white; background:linear-gradient(to top left,blue,white)" id="zoom" class="col-md-offset-1 col-md-4"><br>
		<img src="img/umis.png" style="height:80px; width:160px; margin-left:120px">
		<form method="post" action="student_login.php">
		<div class="form-group col-md-12"><br>
			<label  class="fs-2" style='color:blue;'>User Name : </label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Username" name="sname"><br><br>
		</div>
		<div class="form-group col-md-12">
			<label  class="fs-2" style='color:blue;'>Password : </label>
			<input type="password" class="form-control fs-4" placeholder="Enter Your Password" name="password"><br><br>
		</div>
		<center>
		<button class="p-3 fs-5 text-white fw-bolder rounded-pill" style="background:blue;" value="LOGIN" name="submit">LOGIN</button>
		
		</center>
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
				//print_r($rec);
				session_start();
				$_SESSION["uid"]=$rec["uid"];
				$_SESSION["sname"]=$rec["sname"];
				header("location:student.php?uid={$rec["uid"]}");
			}
			else
			{
				echo "<script>alert('Invalid Username or Password');</script>";
			}
		}
		?>
</div>	
</div>

<div class="col-md-offset-3 col-md-5" style="margin-top:170px" id="table">
<?php
	$sql="select * from umis_info";
	$res=$con->query($sql);
	if($res->num_rows>0)
	{
		echo "<table class='table table-bordered border-2' style=' background:white'>
			<thead>
				<tr>
					<th>S.NO</th>
					<th>USERNAME</th>
					<th>PASSWORD</th>
				</tr>
			</thead>
			<tbody>
		";
		$i=1;
		while($rec=$res->fetch_assoc())
		{
			echo "
				<tr>
					<td>$i</td>
					<td>{$rec["sname"]}</td>
					<td>{$rec["password"]}</td>
				</tr>
			";
			$i++;
		}
		echo "</tbody></table>";
	}
	else
	{
		echo "<h2>Record Not Found..!</h2>";
	}
?>
</div>
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>