<?php
	$get = $connectdb->query("SELECT * FROM product WHERE id_product='$_GET[id]'");
	$row = $get->fetch_assoc();
	$photo_product = $row['photo_product'];
	if(file_exists("../photo_product/$photo_product"))
	{
		unlink("../photo_product/$photo_product");
	}
	
	$connectdb->query("DELETE FROM product WHERE id_product='$_GET[id]'");
	echo "<script>alert('Product Deleted');</script>";
	echo "<script>location='index.php?pages=product';</script>";
?>
