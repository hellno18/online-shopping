<?php
	session_destroy();
	echo "<script>alert('ログアウトしました！');</script>";
	echo "<script>location='login.php';</script>";
?>