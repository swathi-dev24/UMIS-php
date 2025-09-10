<?php
	session_start();
	unset($_POST["uid"]);
	unset($_POST["sname"]);
	session_destroy();
	header("location:index.php");
?>