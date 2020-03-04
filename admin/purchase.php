<h2>Data Purchases</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Name Customer</th>
			<th>Date</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $number=1; ?>
		<?php $get=$connectdb->query("SELECT * FROM purchases JOIN 
		customers ON purchases.id_customer=customers.id_customer");?>
		<?php while($row = $get->fetch_assoc()){?>
		<tr>
			<td><?php echo $number ?></td>
			<td><?php echo $row['name_customer'];?></td>
			<td><?php echo $row['date_purchase'];?></td>
			<td><?php echo $row['total_purchase'];?></td>
			<td>
				<a href="index.php?pages=detail&id=<?php echo $row['id_purchase'];?>" class="btn btn-info">detail</a>
			</td>
		</tr>

		<?php $number++;
			} 
		?>
	</tbody>
</table>