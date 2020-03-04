<h2>Add Customer</h2>
<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password">
	</div>
	<div class="form-group">
		<label>Address</label>
		<textarea class="form-control" name="address" rows="2"> </textarea> 
	</div>
	<div class="form-group">
		<label>Telephone</label>
		<input type="number" class="form-control" name="telephone">
	</div>
	<button class="btn btn-primary" name="save">Save</button>
</form>

<?php
	if(isset($_POST['save']))
	{
		$hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT); // hash password
		$get=$connectdb->query("INSERT INTO customers(email_customer, password_customer, name_customer, address_customer, telephone_customer) VALUES('$_POST[email]', '$hashed_password', '$_POST[name]', '$_POST[address]', '$_POST[telephone]')");
		echo "<div class='alert alert-info'>Data Saved</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?pages=customer'>";
	}
?>
