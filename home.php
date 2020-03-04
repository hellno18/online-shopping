<section class="slider">
	<div class="flexslider">
		<ul class="slides">
			<li>
				<div class="w3l_banner_nav_right_banner">
					<h3>Fashion New <span>Spring</span>Season</h3>
					<div class="more">
						<a href="index.php?pages=women" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
					</div>
				</div>
			</li>
			<li>
				<div class="w3l_banner_nav_right_banner1">
					<!-- <h3>Make your <span>Style</span> with Spicy.</h3>
					<div class="more">
						<a href="index.php" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
					</div> -->
				</div>
			</li>
			<li>
				<a href="index.php?pages=women">
					<div class="w3l_banner_nav_right_banner2"></div>
				</a>
			</li>
		</ul>
	</div>
</section>
<!-- flexSlider -->
<link rel="stylesheet" href="asset/css/flexslider.css" type="text/css" media="screen" property="" />
<script defer src="asset/js/jquery.flexslider.js"></script>
<script type="text/javascript">
	$(window).load(function(){
	$('.flexslider').flexslider({
		animation: "slide",
		start: function(slider){
			$('body').removeClass('loading');
		}
	  	});
	});
</script>
<!-- //flexSlider -->