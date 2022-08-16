	<!-- Home -->
<?php $curr= scifishop\App::$app->getProperty('currency'); ?>
	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/slider-1.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/slider-2.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="owl-item">
					<div class="background_image" style="background-image:url(images/slider-3.jpg)"></div>
					<div class="home_content_container">
						<div class="home_content">
							<div class="home_discount d-flex flex-row align-items-end justify-content-start">
								<div class="home_discount_num">20</div>
								<div class="home_discount_text">Discount on the</div>
							</div>
							<div class="home_title">New Collection</div>
							<div class="button button_1 home_button trans_200"><a href="categories.html">Shop NOW!</a></div>
						</div>
					</div>
				</div>

			</div>
				
			<!-- Home Slider Navigation -->
			<div class="home_slider_nav home_slider_prev trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/prev.png" alt=""></div></div>
			<div class="home_slider_nav home_slider_next trans_200"><div class=" d-flex flex-column align-items-center justify-content-center"><img src="images/next.png" alt=""></div></div>

		</div>
	</div>

	<!-- Boxes -->
	
	<div class="boxes">
		<div class="section_container">
			<div class="container">
                            <?php if($categories): ?>
				<div class="row">
					
					<!-- Box -->
                                        <?php foreach ($categories as $category): ?>
					<div class="col-lg-4 box_col">
						<div class="box">
                                                    <div class="box_image"><img src="images/<?=$category->img;?>" alt=""></div>
							<div class="box_title trans_200"><a href="categories.html"><?=$category->title;?></a></div>
						</div>
					</div>
                                        <?php endforeach; ?>
				</div>
                            <?php endif; ?>
			</div>
		</div>
	</div>

	<!-- Categories -->

	<div class="categories">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col text-center">
						<div class="categories_list_container">
							<ul class="categories_list d-flex flex-row align-items-center justify-content-start">
								<li><a href="categories.html">new arrivals</a></li>
								<li><a href="categories.html">recommended</a></li>
								<li><a href="categories.html">best sellers</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products">
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="products_container grid">
							
                                                        <?php if($hot_products): ?>
                                                        <?php foreach ($hot_products as $hot_product): ?>
                                                        <!-- Product -->
							<div class="product grid-item hot">
								<div class="product_inner">
									<div class="product_image">
                                                                            <a href="product/<?=$hot_product->alias; ?>"><img src="images/<?=$hot_product->img; ?>" alt=""></a>
										<div class="product_tag">hot</div>
									</div>
									<div class="product_content text-center">
										<div class="product_title"><a href="product/<?=$hot_product->alias; ?>"><?=$hot_product->title; ?></a></div>
										<div class="product_price"><?=$curr['symbol_left']; ?><?=$hot_product->price * $curr['value']; ?><?=$curr['symbol_right']; ?></div>
										<div class="product_button ml-auto mr-auto trans_200"><a href="#">add to cart</a></div>
									</div>
								</div>	
							</div>
                                                        <?php endforeach; ?>
                                                        <?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        <!-- Newsletter -->
        <div class="newsletter">
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2">
					<div class="newsletter_content text-center">
						<div class="newsletter_title_container">
							<div class="newsletter_title">subscribe to our newsletter</div>
							<div class="newsletter_subtitle">we won't spam, we promise!</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" id="newsletter_form" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="your e-mail here" required="required">
								<button class="newsletter_button">submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

