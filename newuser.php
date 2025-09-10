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
<div class="col-md-offset-2 col-md-8">
		<center>
		<img src="img/umis.png" style="height:80px; width:160px;" id="zoom"><hr><br>
		</center>
				
		<?php
		if(isset($_POST["submit"]))
		{
			if($_POST["password"]==$_POST["cpassword"])
			{
				$sql="insert into umis_info(sname,aname,password) values('{$_POST["sname"]}','{$_POST["aname"]}','{$_POST["password"]}')";
				if($con->query($sql))
				{
					echo "Successfully Registered</h2>";
				}
				else
				{
					echo "Error";
					echo $sql;
				}
			}
			else
			{
				echo "<div class='alert alert-success'><h2>Password Mismatch..</h2></div>";
			}
		}
		?>
		<form method="post" action="newuser.php">
		`<div class="form-group col-md-6"><br>
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Name (as per School Certificate)</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Name" name="sname"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Name (as per Aadhaar)</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Name" name="aname"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Password : </label>
			<input type="password" class="form-control fs-4" placeholder="Enter Your Password" name="password"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Confirm Password : </label>
			<input type="password" class="form-control fs-4" placeholder="Enter Your Password" name="cpassword"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Aadhaar Number</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Aadhaar Number" name="aadhaar"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>EMIS ID</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Emis Id" name="emis"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Date Of Birth</label>
			<input type="date" class="form-control fs-4" name="dob"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2 mt-4" style='color:darkblue;'>Gender</label><br>
			<input type="radio" value="Male" name="gender" >&ensp;<span class="fs-4">Male</span>&ensp;&ensp;
			<input type="radio" value="Female" name="gender" >&ensp;<span class="fs-4">Female</span>&ensp;&ensp;
			<input type="radio" value="Other" name="gender" >&ensp;<span class="fs-4">Other</span><br><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fa-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Nationality</label><br>
			<select name="nationality" class="fs-4">
				<option>Select Your Nationality</option>
				<option value="American">American</option>
				<option value="Indian">Indian</option>
			</select><br><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Religion</label><br>
			<select name="religion" class="fs-4">
				<option>Select Your Religion</option>
				<option value="Hindu" >Hindu</option>
				<option value="Muslim" >Muslim</option>
			</select><br><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Community</label><br>
			<select name="community" class="fs-4">
				<option>Select Your Community</option>
				<option value="MBC">MBC</option>
				<option value="BC">BC</option>
			</select><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Caste</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Caste" name="caste"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Blood Group</label><br>
			<select name="blood" class="fs-4">
				<option>Select Your Blood Group</option>
				<option value="A+">A+</option>
				<option value="B+">B+</option>
			</select><br><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Is a first graduate in the family?</label><br>
			<input type="radio" value="Yes" name="graduate">&ensp;<span class="fs-4">Yes</span>&ensp;&ensp;
			<input type="radio" value="No" name="graduate">&ensp;<span class="fs-4">No</span><br><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Is coming under any special admission quota?</label><br>
			<input type="radio" value="Yes" name="quota">&ensp;<span class="fs-4">Yes</span>&ensp;&ensp;
			<input type="radio" value="No" name="quota">&ensp;<span class="fs-4">No</span><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue"></span>
			<label class="fs-2" style='color:darkblue;'>Is belonging to differently abled category?</label><br>
			<input type="radio" value="Yes" name="abled">&ensp;<span class="fs-4">Yes</span>&ensp;&ensp;
			<input type="radio" value="No" name="abled">&ensp;<span class="fs-4">No</span><br>
		</div>
		<div class="col-md-12">
			<hr>
		</div>	
		<center>
		<div class="form-group col-md-12"><br>
			<button class="p-3 fs-4 text-white fw-bolder rounded-pill" style="background:blue;" name="submit">SUBMIT</button>
			<button class="p-3 fs-4 text-white fw-bolder rounded-pill bg-danger ms-4">CLEAR</button>
		</div>
		</center>
	   </form>
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>