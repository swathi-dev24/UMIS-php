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
			<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue" >&ensp;&ensp;<?php echo "{$rec["sname"]}";?></span><br>
			<span class="fs-3 fw-bold" style="font-family:Cambria;" >&ensp;&ensp;<?php echo "{$rec["cyear"]}";?> year,</span><br>
			<span class="fs-3 fw-bold" style="font-family:Cambria;" >&ensp;&ensp;<?php echo "{$rec["ccourse"]}";?></span>
			<span class="fs-3 fw-bold" style="font-family:Cambria;" ><?php echo "({$rec["cbranch"]})";?></span><br>
			<span class="fs-3 fw-bold" style="font-family:Cambria;" >&ensp;&ensp;<?php echo "{$rec["cinstitute"]}";?></span>
		</div>
		`<div class="form-group col-md-6 "><br><br><br>
			<span class="fa fa-phone fs-2" style="color:darkblue;"></span>&ensp;
			<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Mobile Number</span>
			<p class="fs-3" style="font-family:Cambria;">&ensp;&ensp;&ensp;<?php echo "{$rec["mobile"]}";?></p><hr>
		</div>
		<div class="form-group col-md-6"><br><br>
			<span class="fa fa-envelope fs-2" style="color:darkblue;"></span>&ensp;
			<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">E-Mail ID</span>&ensp;
			<p class="fs-3" style="font-family:Cambria;" >&ensp;&ensp;&ensp;<?php echo "{$rec["email"]}";?></p><hr>
		</div>
		<div class="form-group col-md-12">
			<span class="fa fa-map-marker-alt fs-2" style="color:darkblue; "></span>
			<div class="dropdown">
				<button class="dropdown-toggle border" data-toggle="dropdown" ><span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue; padding-right:1120px">Permanent Address</span></button>
				<ul class="dropdown-menu  col-md-12">
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Country</span>
							<p class="fs-3" style="font-family:Cambria;"><?php echo "{$rec["pcountry"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">State</span>
							<p class="fs-3" style="font-family:Cambria;" ><?php echo "{$rec["pstate"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Location Type</span>
							<p class="fs-3" style="font-family:Cambria;"><?php echo "{$rec["plocation"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">District</span>
							<p class="fs-3 " style="font-family:Cambria;" ><?php echo "{$rec["pdistrict"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Taluk</span>
							<p class="fs-3" style="font-family:Cambria;"><?php echo "{$rec["ptaluk"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Village</span>
							<p class="fs-3" style="font-family:Cambria;"><?php echo "{$rec["pvillage"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Block</span>
							<p class="fs-3" style="font-family:Cambria;"><?php echo "{$rec["pblock"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Village Panchayat</span>
							<p class="fs-3" style="font-family:Cambria;" ><?php echo "{$rec["ppanchayat"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Postal Address</span>
							<p class="fs-3" style="font-family:Cambria;" ><?php echo "{$rec["paddress"]}";?></p><hr>
						</div>
					</li>
				</ul>
			</div>
		<hr>
		</div>
		<div class="form-group col-md-12">
			<span class="fa fa-map-marker-alt fs-2" style="color:darkblue; "></span>
			<div class="dropdown">
				<button class="dropdown-toggle border" data-toggle="dropdown"><span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue; padding-right:1080px">Communication Address</span></button>
				<ul class="dropdown-menu col-md-12">
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Country</span>
							<p class="fs-3" style="font-family:Cambria;" ><?php echo "{$rec["ccountry"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">State</span>
							<p class="fs-3" style="font-family:Cambria;" ><?php echo "{$rec["cstate"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Location Type</span>
							<p class="fs-3" style="font-family:Cambria;" ><?php echo "{$rec["clocation"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">District</span>
							<p class="fs-3" style="font-family:Cambria;"><?php echo "{$rec["cdistrict"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Taluk</span>
							<p class="fs-3" style="font-family:Cambria;"><?php echo "{$rec["ctaluk"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Village</span>
							<p class="fs-3" style="font-family:Cambria;"><?php echo "{$rec["cvillage"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Corporation / Municipality / Town Panchayat</span>
							<p class="fs-3" style="font-family:Cambria;"><?php echo "{$rec["cpanchayat"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Ward</span>
							<p class="fs-3" style="font-family:Cambria;"><?php echo "{$rec["cward"]}";?></p><hr>
						</div>
					</li>
					<li class="dropdown-item">
						<div class="form-group col-md-6">
							<span class="fs-3 fw-bold" style="font-family:Cambria; color:darkblue">Postal Address</span>
							<p class="fs-3" style="font-family:Cambria;" ><?php echo "{$rec["caddress"]}";?></p><hr>
						</div>
					</li>
				</ul>
			</div>
		<hr>
		</div>
		
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>