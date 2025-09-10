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
			<font size="4px" color="black" face="Cambria" >;<b><?php echo "({$rec["cbranch"]})";?></b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<b><?php echo "{$rec["cinstitute"]}";?></b></font>
		</div>
		`<div class="form-group col-md-6 "><br><br><br>
			<span class="fa fa-male" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Father's Name</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["fname"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6"><br><br><br>
			<span class="fa fa-briefcase" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Father's Occupation / Sector</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["foccup"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-female" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Mother's Name</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["mname"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-briefcase" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Mother's Occupation / Sector</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["moccup"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-male" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Guardian's / Spouse's Name</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["guardian"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Is Orphan Category</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["orphan"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-money-bill-wave" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Annual Family Income(In Rs.)</b></font><br>&ensp;
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;Rs.<?php echo "{$rec["income"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-phone" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Parent / Spouse / Guardian Mobile Number</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["phno"]}";?></font><hr>
		</div>
	</form>	
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>