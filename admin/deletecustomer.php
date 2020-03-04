<?php
	$get = $connectdb->query("SELECT * FROM customers WHERE id_customer='$_GET[id]'");
	$row = $get->fetch_assoc();
	
	$connectdb->query("DELETE FROM customers WHERE id_customer='$_GET[id]'");
	echo "<script>alert('Customer Deleted');</script>";
	echo "<script>location='index.php?pages=customer';</script>";
?>
