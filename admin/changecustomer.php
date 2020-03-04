<h2>Change Customer</h2>
<?php
	$get = $connectdb->query("SELECT * FROM customers WHERE id_customer='$_GET[id]'");
	$row = $get->fetch_assoc();
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" name="name" value="<?php echo $row['name_customer'];?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" name="email" value="<?php echo $row['email_customer'];?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" class="form-control" name="password">
	</div>
		<div class="form-group">
		<label>Address</label>
		<textarea class="form-control" name="address" rows="2"><?php echo $row['address_customer'];?></textarea> 
	</div>
	<div class="form-group">
		<label>Telephone</label>
		<input type="number" class="form-control" name="telephone" value="<?php echo $row['telephone_customer'];?>">
	</div>
	<button class="btn btn-primary" name="change">Change</button>
</form>



<?php
	if(isset($_POST['change']))
	{
		//if photo changed
		if(!empty($_POST['password'])){
			 $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT); // hash password
			 $get=$connectdb->query("UPDATE customers SET name_customer ='$_POST[name]',email_customer='$_POST[email]',password_customer='$hashed_password',address_customer='$_POST[address]',telephone_customer='$_POST[telephone]'
			 	WHERE id_customer='$_GET[id]'");
		}
		else{
			$get=$connectdb->query("UPDATE customers SET name_customer ='$_POST[name]',email_customer='$_POST[email]',address_customer='$_POST[address]',telephone_customer='$_POST[telephone]'
			 	WHERE id_customer='$_GET[id]'");
		}
		echo "<div class='alert alert-info'>Customer Data has been changed</div>";
		echo "<meta http-equiv='refresh' content='1;url=index.php?pages=customer'>";
	}
?>