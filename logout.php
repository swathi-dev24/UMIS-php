<?php
	session_start();
	unset($_POST["ad_id"]);
	unset($_POST["ad_name"]);
	session_destroy();
	header("location:index.php");
?>