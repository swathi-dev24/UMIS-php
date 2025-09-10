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
		`<div class="form-group col-md-12 ">
			<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue" >&ensp;&ensp;<b><?php echo "{$rec["sname"]}";?></span><br>
			<span class="fs-3 fw-bold" style="font-family:Cambria;" >&ensp;&ensp;<b><?php echo "{$rec["cyear"]}";?> year,</span><br>
			<span class="fs-3 fw-bold" style="font-family:Cambria;" >&ensp;&ensp;<b><?php echo "{$rec["ccourse"]}";?></span>
			<span class="fs-3 fw-bold" style="font-family:Cambria;" ><b><?php echo "({$rec["cbranch"]})";?>,</span><br>
			<span class="fs-3 fw-bold" style="font-family:Cambria;" >&ensp;&ensp;<b><?php echo "{$rec["cinstitute"]}";?></span>
		</div>
		`<div class="form-group col-md-6 "><br><br><br>
			<span class="fa fa-user fs-2" style="color:darkblue; "></span>&ensp;
			<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Name (as per School Certificate)</span>&ensp;
			<p class="fs-3 " style="font-family:Cambria; " >&ensp;&ensp;&ensp;<?php echo "{$rec["sname"]}";?></p><hr>
		</div>
		<div class="form-group col-md-6"><br><br><br>
			<span class="fa fa-id-card fs-2" style="color:red;"></span>&ensp;
			<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Name (as per Aadhaar)</span>&ensp;&ensp;
			<p class="fs-3" style="font-family:Cambria; ">&ensp;&ensp;<?php echo "{$rec["aname"]}";?> </p><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-id-card fs-2" style="color:darkblue; "></span>&ensp;
			<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Aadhaar Number</span>&ensp;&ensp;
			<p class="fs-3" style="font-family:Cambria; ">&ensp;&ensp;&ensp;<?php echo "{$rec["aadhaar"]}";?> </p><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-id-badge fs-2" style="color:darkblue; "></span>&ensp;
			<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">EMIS ID</span>&ensp;
			<p class="fs-3" style="font-family:Cambria;">&ensp;&ensp;&ensp;<?php echo "{$rec["emis"]}";?> </p><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-calendar-alt fs-2" style="color:darkblue;"></span>&ensp;
			<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Date Of Birth</span>&ensp;
			<p class="fs-3" style="font-family:Cambria; ">&ensp;&ensp;&ensp;<?php echo "{$rec["dob"]}";?> </p><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-intersex" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Gender</b></font><br>
			<font size="4px" color="black" face="Cambria">&ensp;&ensp;<?php echo "{$rec["gender"]}";?> </font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-flag" style="color:darkblue; font-size:20px;"></span>&ensp;
			<font size="4px" color="darkblue" face="Cambria"><b>Nationality</b></font><br>&ensp;
			<font size="4px" color="black" face="Cambria">&ensp;&ensp;<?php echo "{$rec["nationality"]}";?> </font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-om" style="color:darkblue; font-size:20px;"></span>&ensp;
			<font size="4px" color="darkblue" face="Cambria"><b>Religion</b></font><br>&ensp;
			<font size="4px" color="black" face="Cambria">&ensp;&ensp;<?php echo "{$rec["religion"]}";?> </font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-users" style="color:darkblue; font-size:20px;"></span>&ensp;
			<font size="4px" color="darkblue" face="Cambria"><b>Community</b></font><br>&ensp;&ensp;
			<font size="4px" color="black" face="Cambria">&ensp;&ensp;<?php echo "{$rec["community"]}";?> </font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-people-arrows" style="color:darkblue; font-size:20px;"></span>&ensp;
			<font size="4px" color="darkblue" face="Cambria"><b>Caste</b></font><br>&ensp;&ensp;
			<font size="4px" color="black" face="Cambria">&ensp;&ensp;<?php echo "{$rec["caste"]}";?> </font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-tint" style="color:darkblue; font-size:20px;"></span>&ensp;
			<font size="4px" color="darkblue" face="Cambria"><b>Blood Group</b></font><br>&ensp;
			<font size="4px" color="black" face="Cambria">&ensp;&ensp;<?php echo "{$rec["blood"]}";?> </font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-graduation-cap" style="color:darkblue; font-size:20px;"></span>&ensp;
			<font size="4px" color="darkblue" face="Cambria"><b>Is a first graduate in the family?</b></font><br>&ensp;
			<font size="4px" color="black" face="Cambria">&ensp;&ensp;<?php echo "{$rec["graduate"]}";?> </font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-medal" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Is coming under any special admission quota?</b></font><br>
			<font size="4px" color="black" face="Cambria">&ensp;&ensp;<?php echo "{$rec["quota"]}";?> </font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-wheelchair" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Is belonging to differently abled category?</b></font><br>
			<font size="4px" color="black" face="Cambria">&ensp;&ensp;<?php echo "{$rec["abled"]}";?> </font><hr>
		</div>
		</form>
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>