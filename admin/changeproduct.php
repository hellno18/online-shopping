<h2>Change Product</h2>
<?php
	$get = $connectdb->query("SELECT * FROM product WHERE id_product='$_GET[id]'");
	$row = $get->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name_product" value="<?php echo $row['name_product'];?>">
	</div>
	<div class="form-group">
		<label>Price</label>
		<input type="number" class="form-control" name="price" 
		value="<?php echo $row['price_product'];?>">
	</div>
	<div class="form-group">
		<label>Weight (gr)</label>
		<input type="number" class="form-control" name="weight" value="<?php echo $row['weight_product'];?>">
	</div>
	<div class="form-group">
		<img src="../photo_product/<?php echo $row['photo_product'];?>" width="200">
	</div>
	<div class="form-group">
		<label>Change Photo</label>
		<input type="file" class="form-control" name="photo">
	</div>
	<div class="form-group">
		<label>Description</label>
		<textarea class="form-control" name="description" rows="10"><?php echo $row['description_product'];?>
		</textarea> 
	</div>

	<div class="form-group">
		<label>Category</label>
		<select id="category" name="category">
		  <option value="<?php echo $row['category_product'];?>"><?php echo $row['category_product'];?></option>
		  <option value="Mens">Mens</option>
		  <option value="Womans">Womans</option>
		</select>
	</div>
	<div class="form-group">
		<label>Condition</label>
		<select id="condition" name="condition" >
		  <option value="<?php echo $row['condition_product'];?>"><?php echo $row['condition_product'];?></option>
		  <option value="New">New</option>
		  <option value="Sale">Sale</option>
		</select>
	</div>
	<button class="btn btn-primary" name="change">Change</button>
</form>


<?php
	if(isset($_POST['change']))
	{
		$name_photo= $_FILES['photo']['name'];
		$location = $_FILES['photo']['tmp_name'];
		//if photo changed
		if(!empty($location)){
			move_uploaded_file($location, "../photo_product/".$name_photo);
			$get=$connectdb->query("UPDATE product SET name_product ='$_POST[name_product]',price_product='$_POST[price]',weight_product='$_POST[weight]',photo_product='$name_photo',description_product='$_POST[description]',category_product='$_POST[category]',
				condition_product='$_POST[condition]'
				WHERE id_product='$_GET[id]'");
		}
		else{
			$get=$connectdb->query("UPDATE product SET name_product ='$_POST[name_product]',price_product='$_POST[price]',weight_product='$_POST[weight]',description_product='$_POST[description]',
				category_product='$_POST[category]',condition_product='$_POST[condition]' WHERE id_product='$_GET[id]'");
		}
		echo "<div class='alert alert-info'>Data Product has been changed</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?pages=product'>";
	}
?>