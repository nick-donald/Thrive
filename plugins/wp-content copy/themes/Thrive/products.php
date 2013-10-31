<?php 
	// template name: Products

	get_header();
?>


<div id="products-page">
	<div id="products-intro">
		<div class="scalable-container">
			<div class="major-title">
				<h1 class="product-heading">Four Delicious flavors with the nutrition you need.</h1>
			</div>
			<div id="product-select-container">
				<ul id="product-select">
					<li class="product-cup">
						<a href="#">
							<img class="display-cup" height="180" src="<?php bloginfo('template_url'); ?>/Images/VanDrop_small.png">
						</a>
					</li>
					<li class="product-cup">
						<a href="#">
							<img class="display-cup" height="180" src="<?php bloginfo('template_url'); ?>/Images/ChocFudgeDrop_small.png">
						</a>
					</li>
					<li class="product-cup">
						<a href="#">
							<img class="display-cup" height="180" src="<?php bloginfo('template_url'); ?>/Images/Strawdrop_small.png">
						</a>
					</li>
					<li class="product-cup">
						<a href="#">
							<img class="display-cup" height="180" src="<?php bloginfo('template_url'); ?>/Images/MChocDrop_small.png">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="products-info" class="products-first-selector">
		<div class="scalable-container">
			<div id="product-basic">
				<ul id="product-basic-scroller">
					<li class="product-scroller-item item-default selected">
						<div class="product-scroller-default">
							<p>Click a cup to learn more.</p>
						</div>
					</li>
					<li class="product-scroller-item item-0">
						<div class="product-scroller-title">
							<p class="short-title">Vanilla</p>
						</div>
						<div class="product-scroller-desc">
							<p>THRIVE Homemade Vanilla is rich with Real Vanilla extract, eggs and custard flavors reminiscent of traditional homemade vanilla ice cream.</p>
						</div>
					</li>
					<li class="product-scroller-item item-1">
						<div class="product-scroller-title">
							<p class="long-title">Chocolate Fudge</p>
						</div>
						<div class="product-scroller-desc">
							<p>THRIVE Chocolate Fudge is a chocolate reminiscent of indulgent dark chocolate ice cream. A true chocolate lovers delight.</p>
						</div>
					</li>
					<li class="product-scroller-item item-2">
						<div class="product-scroller-title">
							<p class="long-title">Strawberry</p>
						</div>
						<div class="product-scroller-desc">
							<p>THRIVE Strawberry has a fresh strawberry flavor due to its special recipe which locks in the natural flavor and sweetness of strawberry.</p>
						</div>
					</li>
					<li class="product-scroller-item item-3">
						<div class="product-scroller-title">
							<p class="long-title">Milk Chocolate</p>
						</div>
						<div class="product-scroller-desc">
							<p>THRIVE Milk Chocolate has a creamy milk chocolate taste made with mild premium cocoa and a touch of vanilla.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div id="product-basic-more">
			<a href="#" class="learn-more-link">
				Learn More
				<i class="icon-angle-down"></i>
			</a>
		</div>
	</div>
</div>


<?php get_footer(); ?>