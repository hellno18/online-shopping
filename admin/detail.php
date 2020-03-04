<h2>Detail Purchase</h2>
<?php
	$get = $connectdb->query("SELECT * FROM purchases JOIN customers
		ON purchases.id_customer=customers.id_customer
		WHERE purchases.id_purchase='$_GET[id]'");
	$detail= $get->fetch_assoc();
?>
<!-- <pre><?php print_r($detail);?></pre> -->
<strong><?php echo "Name Customer : ".$detail['name_customer'];?></strong><br>
<p>
	<?php echo "Telephone : ".$detail['telephone_customer'];?><br>
	<?php echo "Email : ".$detail['email_customer'];	?>

</p>

<p>
	<?php echo "Date Purchase : ".$detail['date_purchase']; 	?><br>
	<?php echo "Total Purchase : ".$detail['total_purchase'];	?>

</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Name Product</th>
			<th>Price</th>
			<th>Amount</th>
			<th>Sub Total</th>
		</tr>
	</thead>
	<tbody>
		<?php $number=1; ?>
		<?php $get=$connectdb->query("SELECT * FROM purchased_product JOIN
		product ON purchased_product.id_product=product.id_product
		WHERE purchased_product.id_purchased='$_GET[id]'");?>
		<?php while($row = $get->fetch_assoc()){?>
		<tr>
			<td><?php echo $number ?></td>
			<td><?php echo $row['name_product'];?></td>
			<td><?php echo $row['price_product'];?></td>
			<td><?php echo $row['amount'];?></td>
			<td><?php echo $row['price_product']*$row['amount'];?></td>
		</tr>

		<?php $number++;
			} 
		?>
	</tbody>
</table>