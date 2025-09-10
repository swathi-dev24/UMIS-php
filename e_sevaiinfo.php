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
<div class="col-md-12"><br>
		<?php
			$sql="select * from umis_info where uid='{$_GET["uid"]}'";
			$res=$con->query($sql);
			if($res->num_rows>0)
			{
				$rec=$res->fetch_assoc();
				//print_r($rec);
			}
		?>
		<form method="post" action="<?php echo $_SERVER["REQUEST_URI"];?>">
		<div class="form-group col-md-12 ">
			<font size="4px" color="darkblue" face="Cambria" >&ensp;&ensp;<b><?php echo "{$rec["sname"]}";?></b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<b><?php echo "{$rec["cyear"]}";?> year,</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<b><?php echo "{$rec["ccourse"]}";?></b></font>
			<font size="4px" color="black" face="Cambria" ><b><?php echo "{$rec["cbranch"]}";?></b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<b><?php echo "{$rec["cinstitute"]}";?></b></font>
		</div>
		`<div class="form-group col-md-6 "><br><br><br>
			<span class="fa fa-user" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Name (as per School Certificate)</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_name"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6"><br><br><br>
			<span class="fa fa-id-card" style="color:red; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Name (as per Aadhaar)</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_aname"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-intersex" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Gender</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_gender"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-flag" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Nationality</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_nationality"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-om" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Religion</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_religion"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-users" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Community</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_community"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-users" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Community Certificate Number</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_communityno"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-people-arrows" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Caste</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_caste"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-graduation-cap" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Is a first graduate in the family ?</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_graduate"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-male" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Father's Name</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_fname"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-female" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Mother's Name</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_mname"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-money" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Annual Family Income (in Rs)</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_income"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-money" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Income Certificate Number</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["e_incomeno"]}";?></font><hr>
		</div>
	</form>	
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>