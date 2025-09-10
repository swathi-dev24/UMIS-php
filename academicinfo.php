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
			<font size="4px" color="black" face="Cambria" ><b><?php echo "({$rec["cbranch"]})";?>,</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<b><?php echo "{$rec["cinstitute"]}";?></b></font>
		</div>
		<div class="form-group col-md-12 "><br><br><br>
			<font size="4px" color="darkblue" face="Cambria"><b>CURRENT ACADEMIC INFORMATION</b></font>
		</div>
		`<div class="form-group col-md-6 "><br>
			<span class="fa fa-school" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Academic Year Of Joining</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["cjoin"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-book" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Stream Type</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["cstream"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-computer" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Course Type</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["cctype"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-computer" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Course</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["ccourse"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-laptop-code" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Branch / Specialization</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["cbranch"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-language" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Medium Of Instruction</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["cmedium"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-book-open" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Mode Of Study</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["cmode"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-calendar-alt" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Date Of Admission</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["cadmission"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-clipboard-list" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Type Of Admission</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["cctype"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Counselling / Admission Number</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["ccounselling"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Registration / Roll Number</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["crollno"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Has the student joined as lateral entry?</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["clateral"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-hotel" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Hosteller</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["chosteller"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-university" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Institute Name</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["cinstitute"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-building" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Year Of Study</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["cyear"]}";?></font><hr>
		</div>
		<div class="form-group col-md-12"><br>
			<font size="4px" color="darkblue" face="Cambria"><b>PAST ACADEMIC INFORMATION</b></font>
		</div>
		`<div class="form-group col-md-6 ">
			<span class="fa fa-school" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Academic Year Of Joining</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["pjoin"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-book" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Stream Type</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["pstream"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-computer" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Course Type</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["pctype"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-computer" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Course</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["pcourse"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-laptop-code" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Branch / Specialization</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["pbranch"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-language" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Medium Of Instruction</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["pmedium"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-book-open" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Mode Of Study</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["pmode"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-calendar-alt" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Date Of Admission</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["padmission"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-clipboard-list" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Type Of Admission</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["pad_type"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Registration / Roll Number</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["prollno"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-user" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Has the student joined as lateral entry?</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["plateral"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-hotel" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Hosteller</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["phosteller"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-university" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Institute Name</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["pinstitute"]}";?></font><hr>
		</div>
		<div class="form-group col-md-6">
			<span class="fa fa-building" style="color:darkblue; font-size:20px;"></span>
			<font size="4px" color="darkblue" face="Cambria"><b>Year Of Study</b></font><br>
			<font size="4px" color="black" face="Cambria" >&ensp;&ensp;<?php echo "{$rec["pyear"]}";?></font><hr>
		</div>
	</form>
</div>	
</body>
<div class="col-md-12">
	<?php include "footer.php"; ?>
</div>
</html>