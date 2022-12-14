	<!-- Home -->
<?php $curr= scifishop\App::$app->getProperty('currency'); ?>
	<div class="home_prod">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/product_background.jpg" data-speed="0.8"></div>
		<div class="home_prod_container">
			<div class="home_prod_content">
				<div class="home_prod_title">Shop</div>
				<div class="breadcrumbs">
					<ul class="d-flex flex-row align-items-center justify-content-start">
						<li><a href="index.html">Home</a></li>
						<li><a href="categories.html">Woman</a></li>
						<li><a href="categories.html">Accessories</a></li>
						<li>Shoulder Bag</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="product_fview">

		<!-- Sorting & Filtering -->
		<div class="products_bar">
			<div class="section_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="products_bar_content d-flex flex-row align-items-center justify-content-start">
								<div class="product_categories">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li class="active"><a href="#">All</a></li>
										<li><a href="#">Hot Products</a></li>
										<li><a href="#">New Products</a></li>
										<li><a href="#">Sale Products</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Product Content -->
		<div class="section_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="product_content_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
							<div class="product_content order-lg-1 order-2">
								<div class="product_content_inner">
									<div class="product_image_row d-flex flex-md-row flex-column align-items-md-end align-items-start justify-content-start">
                                                                            <?php //debug($product); ?>
                                                                            <div class="product_desc">
                                                                                <h3></h3>
                                                                                <p><?=$product->content;?></p>
                                                                            </div>
										<div class="product_image_1 product_image">
											<img src="images/product_single_1.jpg" alt="">
										</div>
										<div class="product_image_2 product_image"><img src="images/product_single_2.jpg" alt=""></div>
									</div>
									<div class="product_image_row">
										<div class="product_image_3 product_image"><img src="images/product_single_3.jpg" alt=""></div>
									</div>
									<div class="product_image_row d-flex flex-md-row flex-column align-items-start justify-content-start">
										<div class="product_image_4 product_image"><img src="images/product_single_4.jpg" alt=""></div>
										<div class="product_image_5 product_image"><img src="images/product_single_5.jpg" alt=""></div>
									</div>
								</div>
							</div>
							<div class="product_sidebar order-lg-2 order-1">
								<form action="#" id="product_form" class="product_form">
									<div class="product_name"><?=$product->title;?></div>
									<div class="product_price"><?=$curr['symbol_left']; ?><?=$product->price * $curr['value']; ?><?=$curr['symbol_right']; ?></div>
									<div class="product_color">Color: <span>Brown</span></div>
									<div class="product_size">
										<div class="product_size_title">Select Size</div>
										<div class="product_size_list">
											<ul>
												<li class="size_available">
													<input type="radio" id="radio_1" name="product_radio" class="regular_radio radio_1">
													<label for="radio_1">35</label>
												</li>
												<li class="size_available">
													<input type="radio" id="radio_2" name="product_radio" class="regular_radio radio_2">
													<label for="radio_2">36</label>
												</li>
												<li class="size_available">
													<input type="radio" id="radio_3" name="product_radio" class="regular_radio radio_3">
													<label for="radio_3">37</label>
												</li>
												<li class="size_available">
													<input type="radio" id="radio_4" name="product_radio" class="regular_radio radio_4">
													<label for="radio_4">38</label>
												</li>
												<li>
													<input type="radio" id="radio_5" name="product_radio" class="regular_radio radio_5" disabled>
													<label for="radio_5">39</label>
												</li>
												<li>
													<input type="radio" id="radio_6" name="product_radio" class="regular_radio radio_6" disabled>
													<label for="radio_6">40</label>
												</li>
											</ul>
										</div>
									</div>
                                                                        <div class="quantity">
                                                                            <input type="number" name="quantity" value="1" size="3" min="1" step="1">
                                                                            </div>
                                                                        <a id="productAdd" class="add_link cart_button trans_200" href="cart/add?id=<?=$product->id;?>">add to cart</a>
                                                                        <!--  	
                                                                            <button class="cart_button trans_200">add to cart</button>
                                                                            <div class="similar_products_button trans_200"><a href="categories.html">see similar products</a></div>
                                                                        -->
								</form>
								<div class="product_links">
									<ul class="text-center">
										<li><a href="#">See guide</a></li>
										<li><a href="#">Shipping</a></li>
										<li><a href="#">Returns</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>