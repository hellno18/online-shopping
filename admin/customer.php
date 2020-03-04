<h2>Data Customers</h2>
<a href="index.php?pages=addcustomer" class="btn btn-primary">Add Customer</a>
<br>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Email</th>
			<th>Address</th>
			<th>Telephone</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $number=1; ?>
		<?php $get=$connectdb->query("SELECT * FROM customers");?>
		<?php while($row = $get->fetch_assoc()){?>
		<tr>
			<td><?php echo $number ?></td>
			<td><?php echo $row['name_customer'];?></td>
			<td><?php echo $row['email_customer'];?></td>
			<td><?php echo $row['address_customer'];?></td>
			<td><?php echo $row['telephone_customer'];?></td>
			<td>
				<a href="index.php?pages=deletecustomer&id=<?php echo $row['id_customer'];?>" class="btn-danger btn">delete</a>
				<a href="index.php?pages=changecustomer&id=<?php echo $row['id_customer'];?>" class="btn-warning btn">change</a>
			</td>
		</tr>

		<?php $number++;
			} 
		?>
	</tbody>
</table>
