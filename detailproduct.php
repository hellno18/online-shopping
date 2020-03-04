<div class="top-brands">
    <h3> Detail Product </h3></div>
    <div class="w3l_fresh_vegetables_grids">
        <?php
        $get = $connectdb->query("SELECT * FROM product WHERE id_product='$_GET[id]'");
        $detail= $get->fetch_assoc();
        ?>
        <div class="hero-unit" style="margin-left: 20px;">
        <table>
        <tr>
            <td rowspan="0"><img src="photo_product/<?php echo $detail['photo_product']; ?>" class="image_detail" /></td>
        </tr>
        <tr>
            <td colspan="5"><div class="title"><h3><?php echo $detail['name_product']; ?></h3></div></td>
        </tr>
        <tr>
            <td></td>
            <td>Price</td>
            <td>:</td>
    	   <td><div><h3><?php echo number_format($detail['price_product'],0,",",".")." 円";?></h3></div></td>
        </tr>
        <tr>
            <td></td>
            <td>Condition</td>
            <td>:</td>
            <td><div>
                <?php if ($detail['condition_product'] =="New"){
    	        echo '<strong style="color: blue;">New</strong>';	
                } 
                else {
    	           echo '<strong style="color: red;">Sale</strong>';	
                }; ?>
                    
                </div>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>Weight</td>
            <td>:</td>
            <td><div><?php echo $detail['weight_product']." gr"; ?></div></td>
        </tr>
        <tr>
            <td></td>
            <td>Description</td>
            <td>:</td>
            <td><div><?php echo $detail['description_product']; ?></div></td>
        </tr>
    	<tr>
            <td></td>
            <td></td>
            <td></td>
    		<td>
    		<br>
    		<br>
    		<a href="index.php" class="btn btn-info">&laquo; CONTINUE SHOPPING</a>
    		<br>
    		<br>
    		<div class="clear">
    		<a href="index.php?pages=checkout&id=<?php echo $detail['id_product'];?>" class="btn btn-lg btn-danger"><i class="glyphicon glyphicon-shopping-cart icon-white"></i> CHECK OUT &raquo;</a> </div>
        </tr>
        </table>
    </div>
</div>