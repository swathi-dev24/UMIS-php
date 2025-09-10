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
			$sql="select * from umis_info where uid='{$_GET["uid"]}'";
			$res=$con->query($sql);
			if($res->num_rows>0)
			{
				$rec=$res->fetch_assoc();
				//print_r($rec);
			}
		?>
		<?php
		if(isset($_POST["submit"]))
		{	
			$sql="update umis_info set sname='{$_POST["sname"]}',aname='{$_POST["aname"]}',password='{$_POST["password"]}',aadhaar='{$_POST["aadhaar"]}',emis='{$_POST["emis"]}',dob='{$_POST["dob"]}',gender='{$_POST["gender"]}',nationality='{$_POST["nationality"]}',religion='{$_POST["religion"]}',community='{$_POST["community"]}',caste='{$_POST["caste"]}',blood='{$_POST["blood"]}',graduate='{$_POST["graduate"]}',quota='{$_POST["quota"]}',abled='{$_POST["abled"]}',mobile='{$_POST["mobile"]}',email='{$_POST["email"]}',pcountry='{$_POST["pcountry"]}',pstate='{$_POST["pstate"]}',plocation='{$_POST["plocation"]}',pdistrict='{$_POST["pdistrict"]}',ptaluk='{$_POST["ptaluk"]}',pvillage='{$_POST["pvillage"]}',pblock='{$_POST["pblock"]}',ppanchayat='{$_POST["ppanchayat"]}',paddress='{$_POST["paddress"]}',ccountry='{$_POST["ccountry"]}',cstate='{$_POST["cstate"]}',clocation='{$_POST["clocation"]}',cdistrict='{$_POST["cdistrict"]}',ctaluk='{$_POST["ctaluk"]}',cvillage='{$_POST["cvillage"]}',cpanchayat='{$_POST["cpanchayat"]}',cward='{$_POST["cward"]}',caddress='{$_POST["caddress"]}',cjoin='{$_POST["cjoin"]}',cstream='{$_POST["cstream"]}',cctype='{$_POST["cctype"]}',ccourse='{$_POST["ccourse"]}',cbranch='{$_POST["cbranch"]}',cmedium='{$_POST["cmedium"]}',cmode='{$_POST["cmode"]}',cadmission='{$_POST["cadmission"]}',cad_type='{$_POST["cad_type"]}',ccounselling='{$_POST["ccounselling"]}',crollno='{$_POST["crollno"]}',clateral='{$_POST["clateral"]}',chosteller='{$_POST["chosteller"]}',cinstitute='{$_POST["cinstitute"]}',cyear='{$_POST["cyear"]}',pjoin='{$_POST["pjoin"]}',pstream='{$_POST["pstream"]}',pctype='{$_POST["pctype"]}',pcourse='{$_POST["pcourse"]}',pbranch='{$_POST["pbranch"]}',pmedium='{$_POST["pmedium"]}',pmode='{$_POST["pmode"]}',padmission='{$_POST["padmission"]}',pad_type='{$_POST["pad_type"]}',prollno='{$_POST["prollno"]}',plateral='{$_POST["plateral"]}',phosteller='{$_POST["phosteller"]}',pinstitute='{$_POST["pinstitute"]}',pyear='{$_POST["pyear"]}',fname='{$_POST["fname"]}',foccup='{$_POST["foccup"]}',mname='{$_POST["mname"]}',moccup='{$_POST["moccup"]}',guardian='{$_POST["guardian"]}',orphan='{$_POST["orphan"]}',income='{$_POST["income"]}',phno='{$_POST["phno"]}',accno='{$_POST["accno"]}',ifsc='{$_POST["ifsc"]}',bname='{$_POST["bname"]}',bbranch='{$_POST["bbranch"]}',city='{$_POST["city"]}',acctype='{$_POST["acctype"]}',e_name='{$_POST["e_name"]}',e_aname='{$_POST["e_name"]}',e_gender='{$_POST["e_gender"]}',e_nationality='{$_POST["e_nationality"]}',e_religion='{$_POST["e_religion"]}',e_community='{$_POST["e_community"]}',e_communityno='{$_POST["e_communityno"]}',e_caste='{$_POST["e_caste"]}',e_graduate='{$_POST["e_graduate"]}',e_fname='{$_POST["e_fname"]}',e_mname='{$_POST["e_mname"]}',e_income='{$_POST["e_income"]}',e_incomeno='{$_POST["e_incomeno"]}' where uid='{$_GET["uid"]}'";
			if($con->query($sql))
			{
				header("location:student_login.php?msg=UPDATE_SUCCESSFULLY");
				echo "<script>alert('Successfully Updated');</script>";
			}
			else
			{
				echo "<script>alert('Error');</script>";
				echo $sql;
			}

				
		}
		?>

		<form method="post" action="<?php echo $_SERVER["REQUEST_URI"];?>">
		<center><p class="fs-1 fw-bold text-decoration-underline" style="color:darkblue">GENERAL INFORMATION</p></center><br>
		`<div class="form-group col-md-6"><br>
			<span class="fa fa-user fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Name (as per School Certificate)</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Name" value="<?php echo "{$rec["sname"]}";?>" name="sname"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-id-card fs-2" style="color:red;"></span>
			<label class="fs-2" style='color:darkblue;'>Name (as per Aadhaar)</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Name" value="<?php echo "{$rec["aname"]}";?>" name="aname"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Password : </label>
			<input type="password" class="form-control fs-4" placeholder="Enter Your Password" value="<?php echo "{$rec["password"]}";?>" name="password"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-id-card fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Aadhaar Number</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Aadhaar Number" value="<?php echo "{$rec["aadhaar"]}";?>"name="aadhaar"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-id-badge fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>EMIS ID</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your EMIS ID" value="<?php echo "{$rec["emis"]}";?>" name="emis"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-calendar-alt fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Date Of Birth</label>
			<input type="date" class="form-control fs-4"  value="<?php echo "{$rec["dob"]}";?>" name="dob"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-intersex fs-2" style="color:darkblue; font-size:20px;"></span>
			<label class="fs-2" style='color:darkblue;'>Gender</label><br>
			<input type="radio" value="Male" name="gender" <?php if($rec["gender"]=="Male") echo "checked"; ?>><span class=" fs-4"> Male</span>
			<input type="radio" value="Female" name="gender" <?php if($rec["gender"]=="Female") echo "checked"; ?>><span class=" fs-4"> Female</span>
			<input type="radio" value="Other" name="gender" <?php if($rec["gender"]=="Other") echo "checked"; ?>><span class="fs-4"> Other</span>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-flag fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Nationality</label><br>
			<select name="nationality" class="fs-4 mt-1">
				<option>Select Your Nationality</option>
				<option value="Indian" <?php if($rec["nationality"]=="Indian") echo "selected"; ?>>Indian</option>
				<option value="American" <?php if($rec["nationality"]=="American") echo "selected"; ?>>American</option>
			</select><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-om fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Religion</label><br>
			<select name="religion" class="fs-4">
				<option>Select Your Religion</option>
				<option value="Hindu" <?php if($rec["religion"]=="Hindu") echo "selected"; ?>>Hindu</option>
				<option value="Muslim" <?php if($rec["religion"]=="Muslim") echo "selected"; ?>>Muslim</option>
			</select><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-users fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue; '>Community</label><br>
			<select name="community" class="fs-4">
				<option>Select Your Community</option>
				<option value="MBC" <?php if($rec["community"]=="MBC") echo "selected"; ?>>MBC</option>
				<option value="BC" <?php if($rec["community"]=="BC") echo "selected"; ?>>BC</option>
			</select><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-people-arrows fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Caste</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Caste" value="<?php echo "{$rec["caste"]}";?>" name="caste"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-tint fs-2" style="color:darkblue; "></span>
			<label class="fs-2 mt-4" style='color:darkblue;'>Blood Group</label><br>
			<select name="blood" class="fs-4">
				<option>Select Your Blood Group</option>
				<option value="A+" <?php if($rec["blood"]=="A+") echo "selected"; ?>>A+</option>
				<option value="B+" <?php if($rec["blood"]=="B+") echo "selected"; ?>>B+</option>
			</select><br><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-graduation-cap fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Is a first graduate in the family?</label><br>
			<input type="radio" value="Yes" name="graduate" <?php if($rec["graduate"]=="Yes") echo "checked"; ?>><span class=" fs-4"> Yes</span>
			<input type="radio" value="No" name="graduate" <?php if($rec["graduate"]=="No") echo "checked"; ?>><span class=" fs-4"> No</span>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-medal fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Is coming under any special admission quota?</label><br>
			<input type="radio" value="Yes" name="quota" <?php if($rec["quota"]=="Yes") echo "checked"; ?>><span class=" fs-4"> Yes</span>
			<input type="radio" value="No" name="quota" <?php if($rec["quota"]=="No") echo "checked"; ?>><span class=" fs-4"> No</span>
		</div>
		<div class="form-group col-md-12">
			<span class="fa fa-wheelchair fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Is belonging to differently abled category?</label><br>
			<input type="radio" value="Yes" name="abled" <?php if($rec["abled"]=="Yes") echo "checked"; ?>><span class=" fs-4"> Yes</span>
			<input type="radio" value="No" name="abled" <?php if($rec["abled"]=="No") echo "checked"; ?>><span class=" fs-4"> No</span>
		</div>

	<!--CONTACT INFORMATION-->
		<center><p class="fs-1 fw-bold text-decoration-underline" style="color:darkblue">CONTACT INFORMATION</p></center><br>
		`<div class="form-group col-md-6"><br>
			<span class="fa fa-phone fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Mobile Number</label>&ensp;
			<input type="text" class="form-control fs-4" placeholder="Enter Your Mobile Number" value="<?php echo "{$rec["mobile"]}";?>" name="mobile"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-envelope fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>E-mail ID</label>&ensp;
			<input type="email" class="form-control fs-4" placeholder="Enter Your E-mail" value="<?php echo "{$rec["email"]}";?>" name="email"><br>
		</div>
		<div class="form-group col-md-12">
			<span class="fa fa-map-marker-alt fs-2" style="color:darkblue;"></span>
			<div class="dropdown">
				<button class="dropdown-toggle  border" data-toggle="dropdown"><label class="fs-2" style='color:darkblue; padding-right:650px'>Permanent Address</label></button>
				<ul class="dropdown-menu  col-md-12">
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Country</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Country" value="<?php echo "{$rec["pcountry"]}";?>" name="pcountry">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>State / Union Territory</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your State / Union Territory" value="<?php echo "{$rec["pstate"]}";?>" name="pstate">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Location Type</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Location Type" value="<?php echo "{$rec["plocation"]}";?>" name="plocation">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>District</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your District" value="<?php echo "{$rec["pdistrict"]}";?>" name="pdistrict">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Taluk</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Taluk" value="<?php echo "{$rec["ptaluk"]}";?>" name="ptaluk">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2"style='color:darkblue;'>Village</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Village" value="<?php echo "{$rec["pvillage"]}";?>" name="pvillage">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Block</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Block" value="<?php echo "{$rec["pblock"]}";?>" name="pblock">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Village Panchayat</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Village Panchayat" value="<?php echo "{$rec["ppanchayat"]}";?>" name="ppanchayat">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Postal Address</label><br>
							<textarea  name="paddress" class="fs-4" placeholder="Enter Your Postal Address"><?php echo "{$rec["paddress"]}";?></textarea>
						</div>
					</li>
				</ul>
			</div>
		<br>
		</div>
		<div class="form-group col-md-12">
			<span class="fa fa-map-marker-alt fs-2" style="color:darkblue;"></span>
			<div class="dropdown">
				<button class="dropdown-toggle border" data-toggle="dropdown"><label class="fs-2" style='color:darkblue; padding-right:610px'>Communication Address</label></button>
				<ul class="dropdown-menu col-md-12">
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Country</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Country" value="<?php echo "{$rec["ccountry"]}";?>" name="ccountry">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>State / Union Territory</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your State / Union Territory" value="<?php echo "{$rec["cstate"]}";?>" name="cstate">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Location Type</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Location Type" value="<?php echo "{$rec["clocation"]}";?>" name="clocation">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>District</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your District" value="<?php echo "{$rec["cdistrict"]}";?>" name="cdistrict">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Taluk</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Taluk" value="<?php echo "{$rec["ctaluk"]}";?>" name="ctaluk">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Village</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Village" value="<?php echo "{$rec["cvillage"]}";?>" name="cvillage">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Corporation / Municipality / Town Panchayat</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Corporation / Municipality / Town Panchayat" value="<?php echo "{$rec["cpanchayat"]}";?>" name="cpanchayat">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<label class="fs-2" style='color:darkblue;'>Ward</label>
							<input type="text" class="form-control fs-4" placeholder="Enter Your Ward" value="<?php echo "{$rec["cward"]}";?>" name="cward">
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-12">
							<label class="fs-2" style='color:darkblue;'>Postal Address</label><br>
							<textarea name="caddress" class="fs-4" placeholder="Enter Your Postal Address"><?php echo "{$rec["caddress"]}";?></textarea>
						</div>
					</li>
				</ul>
			</div><br>
		<hr>
		</div>
		<br>

	<!--ACADEMIC INFORMATION-->
		<center><p class="fs-1 fw-bold text-decoration-underline" style="color:darkblue">ACADEMIC INFORMATION</p></center><br><br>
		<h3 class="fs-2" style="color:darkblue"><b>CURRENT ACADEMIC INFORMATION</b></h3>
		`<div class="form-group col-md-6"><br>
			<span class="fa fa-school fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Academic Year Of Joining</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Academic Year Of Joining" value="<?php echo "{$rec["cjoin"]}";?>" name="cjoin"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-book fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Stream Type</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Stream Type" value="<?php echo "{$rec["cstream"]}";?>" name="cstream"><br>
		</div>
		`<div class="form-group col-md-6">
			<span class="fa fa-computer fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Course Type</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Course Type" value="<?php echo "{$rec["cctype"]}";?>" name="cctype"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-computer fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Course</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Course" value="<?php echo "{$rec["ccourse"]}";?>" name="ccourse"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-laptop-code fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue'>Branch / Specialization</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Branch / Specialization" value="<?php echo "{$rec["cbranch"]}";?>" name="cbranch"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-language fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Medium Of Instruction</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Medium Of Instruction" value="<?php echo "{$rec["cmedium"]}";?>" name="cmedium"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-book-open fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Mode Of Study</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Mode Of Study" value="<?php echo "{$rec["cmode"]}";?>" name="cmode"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-calendar-alt fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Date Of Admission</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Date Of Admission" value="<?php echo "{$rec["cadmission"]}";?>" name="cadmission"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-clipboard-list fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Type Of Admission</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Type Of Admission" value="<?php echo "{$rec["cad_type"]}";?>" name="cad_type"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Counselling / Admission Number</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Counselling / Admission Number" value="<?php echo "{$rec["ccounselling"]}";?>" name="ccounselling"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Registration / Roll Number</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Registration / Roll Number" value="<?php echo "{$rec["crollno"]}";?>" name="crollno"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user fs-2" style="color:darkblue;"></span>
			<label class="fs-2 mt-4" style='color:darkblue;'>Has the sudent joined as lateral entry ?</label><br>
			<input type="radio" value="<?php echo "{$rec["clateral"]}";?>Yes" name="clateral">&ensp;<span class="fs-4">Yes</span>&ensp;&ensp;
			<input type="radio" value="<?php echo "{$rec["clateral"]}";?>No" name="clateral">&ensp;<span class="fs-4">No</span><br><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-hotel fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Hosteller</label><br>
			<input type="radio" value="<?php echo "{$rec["chosteller"]}";?>Yes" name="chosteller">&ensp;<span class="fs-4">Yes</span>&ensp;&ensp;
			<input type="radio" value="<?php echo "{$rec["chosteller"]}";?>No" name="chosteller">&ensp;<span class="fs-4">No</span><br></div>
		<div class="form-group col-md-6">
			<span class="fa fa-university fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Institute Name</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Institute Name" value="<?php echo "{$rec["cinstitute"]}";?>" name="cinstitute"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-building fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Year Of Study</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Year Of Study" value="<?php echo "{$rec["cyear"]}";?>" name="cyear"><br><br>
		</div>
		<h3 style="color:darkblue" class="col-md-12 fs-2"><b>PAST ACADEMIC INFORMATION</b></h3>
		`<div class="form-group col-md-6"><br>
			<span class="fa fa-school fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Academic Year Of Joining</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Academic year Of Joining" value="<?php echo "{$rec["pjoin"]}";?>" name="pjoin"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-book fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Stream Type</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Stream Type" value="<?php echo "{$rec["pstream"]}";?>" name="pstream"><br>
		</div>
		`<div class="form-group col-md-6">
			<span class="fa fa-computer fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Course Type</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Course Type" value="<?php echo "{$rec["pctype"]}";?>" name="pctype"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-computer fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Course</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Course" value="<?php echo "{$rec["pcourse"]}";?>" name="pcourse"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-laptop-code fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Branch / Specialization</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Branch / Specialization" value="<?php echo "{$rec["pbranch"]}";?>" name="pbranch"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-clipboard-list fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Medium Of Instruction</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Medium Of Instruction" value="<?php echo "{$rec["pmedium"]}";?>" name="cmedium"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-language fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Mode Of Study</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Mode Of Study" value="<?php echo "{$rec["pmode"]}";?>" name="pmode"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-calendar-alt fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Date Of Admission</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Date Of Admission" value="<?php echo "{$rec["padmission"]}";?>" name="padmission"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-clipboard-list fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Type Of Admission</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Type Of Admission" value="<?php echo "{$rec["pad_type"]}";?>" name="pad_type"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Registration / Roll Number</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Registration / Roll Number" value="<?php echo "{$rec["prollno"]}";?>" name="prollno"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Has the sudent joined as lateral entry ?</label><br>
			<input type="radio" value="<?php echo "{$rec["plateral"]}";?>Yes" name="plateral">&ensp;<span class="fs-4">Yes</span>&ensp;&ensp;
			<input type="radio" value="<?php echo "{$rec["plateral"]}";?>No" name="plateral">&ensp;<span class="fs-4">No</span><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-hotel fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Hosteller</label><br>
			<input type="radio" value="<?php echo "{$rec["phosteller"]}";?>Yes" name="phosteller">&ensp;<span class="fs-4">Yes</span>&ensp;&ensp;
			<input type="radio" value="<?php echo "{$rec["phosteller"]}";?>No" name="phosteller">&ensp;<span class="fs-4">No</span><br></div>
		<div class="form-group col-md-6">
			<span class="fa fa-university fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Institute Name</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Institute Name" value="<?php echo "{$rec["pinstitute"]}";?>" name="pinstitute"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-building fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Year Of Study</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Year Of Study" value="<?php echo "{$rec["pyear"]}";?>" name="pyear"><br>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	<!--FAMILY INFORMATION-->
		<center><p class="col-md-12 fs-1 fw-bold text-decoration-underline" style="color:darkblue">FAMILY INFORMATION</p></center><br><br>
		`<div class="form-group col-md-6"><br>
			<span class="fa fa-male fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Father's Name</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Father's Name" value="<?php echo "{$rec["fname"]}";?>" name="fname"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-briefcase fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Father's Occupation / Sector</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Father's Occupation / Sector" value="<?php echo "{$rec["foccup"]}";?>" name="foccup"><br>
		</div>
		`<div class="form-group col-md-6">
			<span class="fa fa-female fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Mother's Name</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Mother's Name" value="<?php echo "{$rec["mname"]}";?>" name="mname"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-briefcase fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Mother's Occupation / Sector</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Mother's Occupation / Sector" value="<?php echo "{$rec["moccup"]}";?>" name="moccup"><br>
		</div>
		`<div class="form-group col-md-6">
			<span class="fa fa-male fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Guardian's / Spouse's Name</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Guardian's / Spouse's Name" value="<?php echo "{$rec["guardian"]}";?>" name="guardian"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user fs-2" style="color:darkblue;"></span>
			<label class="fs-2 mt-4" style='color:darkblue;'>Is Orphan Category ? </label><br>
			<input type="radio" value="<?php echo "{$rec["orphan"]}";?>Yes" name="orphan">&ensp;<span class="fs-4">Yes</span>&ensp;&ensp;
			<input type="radio" value="<?php echo "{$rec["orphan"]}";?>No" name="orphan">&ensp;<span class="fs-4">No</span><br><br>
		</div>
		`<div class="form-group col-md-6">
			<span class="fa fa-money fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Annual Family Income (in Rs.)</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Annual Family Income (in Rs.)" value="<?php echo "{$rec["income"]}";?>" name="income"><br>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-phone fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Parent / Spouse / Guardian Mobile Number</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Parent/ Spouse / Guardian Mobile Number" value="<?php echo "{$rec["phno"]}";?>" name="phno"><br>
		</div>
		<div class="col-md-12">
			<hr>
		</div>

	<!--BANK NFORMATION-->
		<center><p class="col-md-12 fs-1 fw-bold text-decoration-underline" style="color:darkblue">BANK INFORMATION</p></center><br><br>
		`<div class="form-group col-md-6"><br>
			<span class="fa fa-id-card fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Account Number</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Account Number" value="<?php echo "{$rec["accno"]}";?>" name="accno"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-file-code fs-4" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>IFSC Code</label>
			<input type="text" class="form-control" placeholder="Enter Your IFSC Code" value="<?php echo "{$rec["ifsc"]}";?>" name="ifsc"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-bank fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Bank Name</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Bank Name" value="<?php echo "{$rec["bname"]}";?>" name="bname"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-bank fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Bank Branch</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Bank Branch" value="<?php echo "{$rec["bbranch"]}";?>" name="bbranch"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-city fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>City</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your City" value="<?php echo "{$rec["city"]}";?>" name="city"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-credit-card fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Account Type</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Account Type" value="<?php echo "{$rec["acctype"]}";?>" name="acctype"><br>
		</div>
		<div class="col-md-12">
			<hr>
		</div>

	<!--E-SEVAI INFORMATION-->
		<center><p class="col-md-12 fs-1 fw-bold text-decoration-underline" style="color:darkblue">E-SEVAI INFORMATION</p></center><br>
		`<div class="form-group col-md-6"><br>
			<span class="fa fa-user fs-2" style="color:darkblue; "></span>
			<label class="fs-2" style='color:darkblue;'>Name (as per School Certificate)</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Name" value="<?php echo "{$rec["e_name"]}";?>" name="e_name"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-id-card fs-2" style="color:red;"></span>
			<label class="fs-2" style='color:darkblue;'>Name (as per Aadhaar)</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Name" value="<?php echo "{$rec["e_aname"]}";?>" name="e_aname"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-intersex fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Gender</label><br>
			<input type="radio" value="<?php echo "{$rec["e_gender"]}";?>Male" name="e_gender" >&ensp;<span class="fs-4">Male</span>&ensp;&ensp;
			<input type="radio" value="<?php echo "{$rec["e_gender"]}";?>Female" name="e_gender" >&ensp;<span class="fs-4">Female</span>&ensp;&ensp;
			<input type="radio" value="<?php echo "{$rec["e_gender"]}";?>Other" name="e_gender">&ensp;<span class="fs-4">Other</span><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-flag fs-2 mt-3" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Nationality</label><br>
			<select name="e_nationality" class="fs-4">
				<option>Select Your Nationality</option>
				<option value="<?php echo "{$rec["e_nationality"]}";?>American">American</option>
				<option value="<?php echo "{$rec["e_nationality"]}";?>Indian">Indian</option>
			</select><br></div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-om fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Religion</label><br>
			<select name="e_religion" class="fs-4">
				<option>Select Your Religion</option>
				<option value="<?php echo "{$rec["e_religion"]}";?>Hindu" >Hindu</option>
				<option value="<?php echo "{$rec["e_religion"]}";?>Muslim" >Muslim</option>
			</select><br></div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-users fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Community</label><br>
			<select name="e_community" class="fs-4">
				<option>Select Your Community</option>
				<option value="<?php echo "{$rec["e_community"]}";?>MBC">MBC</option>
				<option value="<?php echo "{$rec["e_community"]}";?>BC">BC</option>
			</select><br></div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-users fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Community Certificate Number</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Community Certificate Number" value="<?php echo "{$rec["e_communityno"]}";?>" name="bbranch"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-people-arrows fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Caste</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Caste" value="<?php echo "{$rec["e_caste"]}";?>" name="e_caste"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-graduation-cap fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Is a first graduate in the family ?</label><br>
			<input type="radio" value="<?php echo "{$rec["e_graduate"]}";?>Yes" name="e_graduate">&ensp;<span class="fs-2">Yes</span>&ensp;&ensp;
			<input type="radio" value="<?php echo "{$rec["e_graduate"]}";?>No" name="e_graduate">&ensp;<span class="fs-2">No</span><br></div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-male fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Father's Name</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Father's Name" value="<?php echo "{$rec["e_fname"]}";?>" name="e_fname"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-female fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Mother's Name</label>
			<input type="text" class="form-control fs-4"  placeholder="Enter Your Mother's Name" value="<?php echo "{$rec["e_mname"]}";?>" name="e_mname"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-money fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Annual Family Income (in Rs)</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Annual Family Income (in Rs.)" value="<?php echo "{$rec["e_income"]}";?>" name="e_income"><br>
		</div>
		<div class="form-group col-md-6"><br>
			<span class="fa fa-money fs-2" style="color:darkblue;"></span>
			<label class="fs-2" style='color:darkblue;'>Income Certificate Number</label>
			<input type="text" class="form-control fs-4" placeholder="Enter Your Income Certificate Number" value="<?php echo "{$rec["e_incomeno"]}";?>" name="e_incomeno"><br>
		</div>

		<div class="col-md-12">
			<hr>
	</div>
		<center>
		<div class="form-group col-md-12">
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