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
			<font size="4px" color="black" face="Cambria" ><b><?php echo "({$rec["cbranch"]})";?></b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<b><?php echo "{$rec["cinstitute"]}";?></b></font>
		</div>
		<div class="col-md-12"><br><br><br>
			<font size="4px" color="darkblue" face="Cambria"><b>ACCOUNT ACTIVITY STATUS</b></font>
		</div>
		`<div class="form-group col-md-6 "><br>
			<span class="fa fa-id-card" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Account Number</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["accno"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-file-code" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>IFSC Code</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["ifsc"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-bank" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Bank Name</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["bname"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-bank" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Bank Branch</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["bbranch"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-city" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>City</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["city"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-credit-card" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Account Type</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["acctype"]}";?></font><hr>
		</div>
	</form>	
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>