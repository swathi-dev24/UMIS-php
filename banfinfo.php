<html>
	<?php include "head.php";
		include "config.php";
	?>
<body style="background:silver">
<div class="col-md-12">
<?php include "nav.php";?>
</div>
<div style="margin-top:130px" class="col-md-12"><br>
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
		<div class="col-md-12"><br>
			<font size="4px" color="darkblue" face="Cambria">ACCOUNT ACTIVITY STATUS</font>
		</div>
		`<div class="form-group col-md-6 ">
			<span class="fa fa-key" style="color:blue"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Account Number</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["accno"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key" style="color:blue"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>IFSC Code</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["ifsc"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key" style="color:blue"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Bank Name</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["bname"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key" style="color:blue"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Bank Branch</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["bbranch"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key" style="color:blue"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>City</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["city"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-key" style="color:blue"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Account Type</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["acctype"]}";?></font><hr>
		</div>
		
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>