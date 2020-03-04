<?php
	if (isset($_GET['pageno'])) {
    	$pageno = $_GET['pageno'];
	} else {
	    $pageno = 1;
	}
	$maxshow = 4;
	$begin = ($pageno>1) ? ($pageno * $maxshow) - $maxshow : 0;
?>
<h2>Data Products</h2>
<a href="index.php?pages=addproduct" class="btn btn-primary">Add Product</a>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Price</th>
			<th>Weight</th>
			<th>Photo</th>
			<th>Category</th>
			<th>Condition</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $number=1; ?>
		<?php $get=$connectdb->query("SELECT * FROM product LIMIT $begin, $maxshow");?>
		<?php while($row = $get->fetch_assoc()){?>
		<tr>
			<td><?php echo $number ?></td>
			<td><?php echo $row['name_product'];?></td>
			<td><?php echo $row['price_product'];?></td>
			<td><?php echo $row['weight_product'];?></td>
			<td>
				<img src="../photo_product/<?php echo $row['photo_product'];?>" alt="" width="100">
			</td>
			<td><?php echo $row['category_product'];?></td>
			<td><?php echo $row['condition_product'];?></td>
			<td>
				<a href="index.php?pages=deleteproduct&id=<?php echo $row['id_product'];?>" class="btn-danger btn">delete</a>
				<a href="index.php?pages=changeproduct&id=<?php echo $row['id_product'];?>" class="btn btn-warning">change</a>
			</td>
		</tr>
		<?php $number++;
			} 
		?>
	</tbody>
</table>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="index.php?pages=product&pageno=<?php 
      if($pageno<=1){
      	echo '1';
      }else{
      	echo $pageno-1;
      }
      
      ?>" tabindex="">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="index.php?pages=product&pageno=1">1</a></li>
    <li class="page-item"><a class="page-link" href="index.php?pages=product&pageno=2">2</a></li>
    <li class="page-item"><a class="page-link" href="index.php?pages=product&pageno=3">3</a></li>
    <li class="page-item">
      <a class="page-link" href="index.php?pages=product&pageno=<?php 
      if($pageno>=0){
      	echo $pageno+1;
      }      
      ?>">Next</a>
    </li>
  </ul>
</nav>
