<h2>Add Product</h2>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name_product">
	</div>
	<div class="form-group">
		<label>Price</label>
		<input type="number" class="form-control" name="price">
	</div>
	<div class="form-group">
		<label>Weight (gr)</label>
		<input type="number" class="form-control" name="weight">
	</div>
		<div class="form-group">
		<label>Description</label>
		<textarea class="form-control" name="description" rows="10"> </textarea> 
	</div>
	<div class="form-group">
		<label>Photo</label>
		<input type="file" class="form-control" name="photo">
	</div>
	<div class="form-group">
		<label>Category</label>
		<select id="category" name="category">
		  <option value="Mens">Mens</option>
		  <option value="Womans">Womans</option>
		</select>
	</div>
	<div class="form-group">
		<label>Condition</label>
		<select id="condition" name="condition" >
		  <option value="New">New</option>
		  <option value="Sale">Sale</option>
		</select>
	</div>
	<button class="btn btn-primary" name="save">Save</button>
</form>

<?php
	if(isset($_POST['save']))
	{
		$name= $_FILES['photo']['name'];
		$location = $_FILES['photo']['tmp_name'];
		move_uploaded_file($location, "../photo_product/".$name);
		$get=$connectdb->query("INSERT INTO product(name_product, price_product, weight_product, photo_product, description_product,category_product,condition_product) VALUES('$_POST[name_product]', '$_POST[price]', '$_POST[weight]', '$name', '$_POST[description]','$_POST[category]','$_POST[condition]')");
		echo "<div class='alert alert-info'>Data Saved</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?pages=product'>";
	}
?>