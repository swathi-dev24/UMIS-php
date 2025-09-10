<html>
	<?php 
		session_start();
		include "head.php";
		include "config.php";
	?>
<body style="background-image:url(img/bg.jpeg); background-repeat:no-repeat; background-size:cover;">
<div class="row">
	<div class="col-md-12">
		<?php include "nav.php";?>
	</div>
</div>

<div class="col-md-12">
<form method="post" action="login1.php"><br>
		<center>
		<img src="img/umis.png" style="height:80px; width:160px;" id="zoom"><br><br><br>
		</center>
		<div class="col-md-offset-1 col-md-3 text-center info"><br><br>
			<a href="generalinfo.php?uid=<?php echo $_GET['uid']; ?>"  class="text-decoration-none ">
				<p class="fas fa-file-alt fs-1 fw-bold" style="color:darkblue; line-height:10px;"></p><br>
				<p class="fs-1 fw-bold" style="color:darkblue">General Information</p>
			</a>
		</div>
		<div class="col-md-3 text-center info"><br><br>
			<a href="contact.php?uid=<?php echo $_GET['uid']; ?>" class="text-decoration-none">
				<p class="fas fa-address-book fs-1 fw-bold" style="color:darkblue; line-height:10px;" ></p><br>
				<p class="fs-1 fw-bold" style="color:darkblue">Contact Information</p>
			</a>
		</div>
		<div class="col-md-3 text-center info"><br><br>
			<a href="academicinfo.php?uid=<?php echo $_GET['uid']; ?>" class="text-decoration-none">
				<p class="fas fa-graduation-cap fs-1 fw-bold" style="color:darkblue; line-height:10px;" ></p><br>
				<p class="fs-1 fw-bold" style="color:darkblue">Academic Information</p>
			</a>
		</div>
		<div class="col-md-offset-1 col-md-3 text-center info"><br><br><br>
			<a href="familyinfo.php?uid=<?php echo $_GET['uid']; ?>" class="text-decoration-none">
				<p class="fas fa-users fs-1 fw-bold" style="color:darkblue; line-height:10px;" ></p><br>
				<p class="fs-1 fw-bold" style="color:darkblue">Family Information</p>
			</a>
		</div>
		<div class="col-md-3 text-center info"><br><br><br>
			<a href="bankinfo.php?uid=<?php echo $_GET['uid']; ?>" class="text-decoration-none">
				<p class="fas fa-university fs-1 fw-bold" style="color:darkblue; line-height:10px;" ></p><br>
				<p class="fs-1 fw-bold" style="color:darkblue">Bank Account Details</p>
			</a>
		</div>
		<div class="col-md-3 text-center info"><br><br><br>
			<a href="e_sevaiinfo.php?uid=<?php echo $_GET['uid']; ?>" class="text-decoration-none">
				<p class="fas fa-check-circle fs-1 fw-bold" style="color:darkblue; line-height:10px;" ></p><br>
				<p class="fs-1 fw-bold" style="color:darkblue">E-Sevai Verification</p>
		</div>
		</form>
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>