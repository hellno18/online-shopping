<?php 
	$connectdb = new mysqli("localhost","root","","ecommerce");
    if (!isset($_SESSION)) {
        session_start();
   } 
?>

<!-- top-brands -->
<div class="top-brands">
	<div class="container">
		<h3> Women </h3>
		<div class="agile_top_brands_grids">
			<?php $get=$connectdb->query("SELECT * FROM product WHERE category_product = 'womans' ORDER BY id_product DESC limit 12");?>
			<?php while($row = $get->fetch_assoc()){?>
	<div class="col-md-3 top_brand_left">
		<div class="hover14 column">
			<div class="agile_top_brand_left_grid">
				<div class="tag"><img src="asset/images/tag.png" alt=" " class="img-responsive" /></div>
				<div class="agile_top_brand_left_grid1">
				<figure>
					<div class="snipcart-item block" >
					<div class="snipcart-thumb">
						<img src="photo_product/<?php echo $row['photo_product'];?>" width="200" height="200" />	
						<p><?php echo $row['name_product']; ?></p>
						<h4><?php echo number_format($row['price_product'],0,",",".")." 円";?> <!-- <span>1900円</span> --></h4>
					</div>
					<div class="snipcart-details top_brand_home_details">
						<fieldset>
						<a href="index.php?pages=detailproduct&id=<?php echo $row['id_product'];?>" class="btn btn-danger">Detail</a> 
						<a href="index.php?pages=detailproduct&id=<?php echo $row['id_product'];?>" class="btn btn-success">Buy &raquo;</a>
						</fieldset>
					</div>
					</div>
				</figure>
			</div>
		</div>
	</div>
</div>
<?php }	?>

		
					
	</div>
	</div>
	</div>
	<div class="clearfix"> </div>
		</div>
	</div>
</div>