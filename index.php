<?php
include "Admin/koneksi.php";
if($_SESSION['status'] > 0) {
	include "template/header-login.html";
} else {
	include "template/head.html";
}

?>
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex justify-content-center align-items-center">
						<div class="banner-content col-lg-10 col-md-12 justify-content-center">
							<h6 class="text-uppercase">Whenever we bake, bake with our heart</h6>
							<h1>
								<img src="../bakery/Admin/images/logo2.png" width="60%">			
							</h1>
							<p class="text-white mx-auto">
								Welcome to AkuCakery, we have been since 2019. We serve various types of cakes. The cake we made with the Best Ingredients, Best Quality, 100% Homemade, and Always Fresh.
								Just made for you...
							</p>
							<a href="Shop/shop.php" class="primary-btn squire text-uppercase mt-10">Check Our Product</a>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-9">
							<h6 class="text-uppercase">Brand new app to blow your mind</h6>
							<h1>
								We’ve baked every item
								from the core of our heart to serve you
							</h1>
							<p>
								<span>We are here to listen from you deliver exellence by any means</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<a class="primary-btn squire mx-auto mt-20" href="#">Get Started Now</a>						
						</div>
					</div>
				</div>	
				<img class="about-img" src="img/about-img.png" alt="">
			</section>
			<!-- End home-about Area -->

			<!-- Start item-category Area -->
			<section class="item-category-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-12 pb-80 header-text text-center">
							<h1 class="pb-10">Category of available items</h1>
							<p>
								They are grilling celebrities in their own right.
							</p>
						</div>
					</div>								
					<div class="row">
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-item">
								<div class="thumb">
									<img class="img-fluid" src="img/cake/Berry-Cupcake.jpg" width="180px" alt="">
								</div>	
								<a href="#"><h4>Cupcake</h4></a>
								<p>
									inappropriate behavior is often laughed off as “boys will be.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-item">
								<div class="thumb">
									<img class="img-fluid" src="img/cake/birthday-cake1.jpg" width="180px" alt="">
								</div>	
								<a href="#"><h4>Birthday Cake</h4></a>
								<p>
									inappropriate behavior is often laughed off as “boys will be.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-item">
								<div class="thumb">
									<img class="img-fluid" src="img/cake/wedding cake.jpg" width="180px" alt="">
								</div>	
								<a href="#"><h4>Wedding Cake</h4></a>
								<p>
									inappropriate behavior is often laughed off as “boys will be.
								</p>
							</div>
						</div>
						<div class="col-lg-3 col-md-6">
							<div class="single-cat-item">
								<div class="thumb">
									<img class="img-fluid" src="img/cake/dessert.jpg" width="180px" alt="">
								</div>	
								<a href="#"><h4>Dessert</h4></a>
								<p>
									inappropriate behavior is often laughed off as “boys will be.
								</p>
							</div>
						</div>																		
						<a class="primary-btn mx-auto mt-80" href="#">View Full Menu</a>
					</div>
				</div>	
			</section>
			<!-- End item-category Area -->

			<!-- Start about-video Area -->
			<section class="about-video-area section-gap">
				<div class="container">			
					<div class="row align-items-center">
						<div class="col-lg-6 about-video-left">
							<h6 class="text-uppercase">Brand new app to blow your mind</h6>
							<h1>
								We’ve made a life <br>
								that will change you 
							</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a class="primary-btn" href="#">Get Started Now</a>
						</div>
						<div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex">
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play.png" alt=""></a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End about-video Area -->			

			<!-- Start review Area -->
			<section class="review-area section-gap relative">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-9 pb-40 header-text text-center">
							<h1 class="pb-10 text-white">Enjoy our Client’s Review</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>					
					<div class="row">
						<div class="active-review-carusel">
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>	
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Fannie Rowe</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>
							<div class="single-review item">
								<img src="img/r1.png" alt="">
								<div class="title justify-content-start d-flex">
									<a href="#"><h4>Hulda Sutton</h4></a>
									<div class="star">
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star checked"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</div>
								</div>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
							</div>																												
						</div>
					</div>
				</div>	
			</section>
			<!-- End review Area -->								
<?php
include "template/footer.html";
?>
			