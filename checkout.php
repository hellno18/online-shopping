<?php
	$get = $connectdb->query("SELECT * FROM product WHERE id_product='$_GET[id]'");
	$detail= $get->fetch_assoc();
?>

<div class="top-brands">
	<div class="container">
	    <div class="table-responsive">
	    <div class="title"><h3>Form Checkout</h3></div>
	    <div class="hero-unit" style="text-align: center; padding-top: 1em;">
	    	下記のフォームへ必要事項をご記入ください。 お客様の個人情報は、弊社個人情報保護方針に基づいて厳正に管理させていただきます。
	    </div>
	    <form id="checkoutForm" action="" method="post">
	    <table class="table table-condensed">
	    <tr>
	        <td><label for="name_user">氏名</label></td>
	        <td><input name="name" type="text" class="required" size="100" /></td>
	    </tr>
	   	<tr>
	        <td><label for="password_user">パスワード</label></td>
	        <td><input name="password" type="password" class="required" size="100" /></td>
	    </tr>
	    <tr>
	      	<td><label for="email_user">Eメール</label></td>
	        <td><input name="email" type="text" class="required" /></td>
	    </tr>
	    <tr>
	        <td><label for="address_user">住所</label></td>
	        <td><input class="required" name="address" type="text" size="100"> </input> </td>
	    </tr>
	    <tr>
	        <td><label for="telephone_user">電話番号</label></td>
	        <td><input name="telephone" type="text" class="required" /></td>
	    </tr>
	    <tr>
	        <td></td>
	        <td>
	        	<input type="submit" value="submit" name="submit"  class="btn btn-sm btn-primary"/>&nbsp;</input>
	        	<input type="button" value="back"class="btn btn-sm btn-info" name="back" onclick="history.back()"></input>
	        </td>
	    </tr>
	    </table>
	    </form>
	    <?php
	    	if(isset($_POST['submit'])){
	    		$name = $_POST['name'];
	    		$email = $_POST['email'];
	    		$password = $_POST['password'];
	    		$address = $_POST['address'];
	    		$telephone = $_POST['telephone'];
	    		$current_date= date("Y/m/d");
	    		$hashed_password = password_hash($password, PASSWORD_DEFAULT); // hash password
	    		$get=$connectdb->query("INSERT INTO customers(email_customer, password_customer, name_customer, address_customer, telephone_customer) VALUES('$email', '$hashed_password', '$name', '$address', '$telephone')");
	    		$get_cust = $connectdb->query("SELECT * FROM customers WHERE email_customer='$email' AND name_customer='$name'");
				$detail_cust= $get_cust->fetch_assoc();
				//Get id_customer , price_product
				$id_customer=$detail_cust['id_customer'];
				$price_product = $detail['price_product'];
				$id_product= $detail['id_product'];
				$insert_purchases=$connectdb->query("INSERT INTO purchases(id_customer,date_purchase,total_purchase) VALUES('$id_customer','$current_date','$price_product')");
				$get_purchases = $connectdb->query("SELECT * FROM purchases WHERE id_customer='$id_customer'");
				$detail_purchases= $get_purchases->fetch_assoc();
				//Get id_purchase
				$id_purchase=$detail_purchases['id_purchase'];
				$insert_purchased_product=$connectdb->query("INSERT INTO purchased_product(id_purchased,id_product,amount) VALUES('$id_purchase','$id_product','1')");
            	echo "<script>alert('Order Submit');</script>";
            	echo "<script>location='index.php';</script>";
        		header('location:index.php');
            }
	    ?>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
