<?php 


 include 'inc/hader.php'; 
 require_once ("inc/templect/baner.php")

 ?>
		<!-- content-starts-here -->
		<div class="content">
			<?php 
			require_once ("inc/templect/catagory-with-icon.php")

			?>
			<div class="trending-ads">
				<div class="container">
				<!-- slider -->
				<div class="trend-ads">
					<h2>Trending Ads</h2>
							<ul id="flexiselDemo3">
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p1.jpg"/>
											<span class="price">&#36; 450</span>
										</a> 
										<div class="ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p2.jpg"/>
											<span class="price">&#36; 399</span>
										</a> 
										<div class="ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p3.jpg"/>
											<span class="price">&#36; 199</span>
										</a> 
										<div class="ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>8 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p4.jpg"/>
											<span class="price">&#36; 159</span>
										</a> 
										<div class="ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>19 hour ago</span>
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p5.jpg"/>
											<span class="price">&#36; 1599</span>
										</a> 
										<div class="ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p6.jpg"/>
											<span class="price">&#36; 1099</span>
										</a> 
										<div class="ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>1 day ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p7.jpg"/>
											<span class="price">&#36; 109</span>
										</a> 
										<div class="ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>9 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p8.jpg"/>
											<span class="price">&#36; 189</span>
										</a> 
										<div class="ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
								</li>
								<li>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p9.jpg"/>
											<span class="price">&#36; 2599</span>
										</a> 
										<div class="ad-info">
											<h5>Lorem Ipsum is simply dummy</h5>
											<span>3 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p10.jpg"/>
											<span class="price">&#36; 3999</span>
										</a> 
										<div class="ad-info">
											<h5>It is a long established fact that a reader</h5>
											<span>9 hour ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p11.jpg"/>
											<span class="price">&#36; 2699</span>
										</a> 
										<div class="ad-info">
											<h5>passage of Lorem Ipsum you need to be</h5>
											<span>1 day ago</span>
										</div>
									</div>
									<div class="col-md-3 biseller-column">
										<a href="single.php">
											<img src="images/p12.jpg"/>
											<span class="price">&#36; 899</span>
										</a> 
										<div class="ad-info">
											<h5>There are many variations of passages</h5>
											<span>1 hour ago</span>
										</div>
									</div>
								</li>
						</ul>
					<script type="text/javascript">
						 $(window).load(function() {
							$("#flexiselDemo3").flexisel({
								visibleItems:1,
								animationSpeed: 1000,
								autoPlay: true,
								autoPlaySpeed: 5000,    		
								pauseOnHover: true,
								enableResponsiveBreakpoints: true,
								responsiveBreakpoints: { 
									portrait: { 
										changePoint:480,
										visibleItems:1
									}, 
									landscape: { 
										changePoint:640,
										visibleItems:1
									},
									tablet: { 
										changePoint:768,
										visibleItems:1
									}
								}
							});
							
						});
					   </script>
					   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
					</div>   
			</div>
			<!-- //slider -->				
			</div>
			<div class="mobile-app">
				<div class="container">
					<div class="col-md-5 app-left">
						<a href="mobileapp.php"><img src="images/app.png" alt=""></a>
					</div>
					<div class="col-md-7 app-right">
						<h3>Resale App is the <span>Easiest</span> way for Selling and buying second-hand goods</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor Sed bibendum varius euismod. Integer eget turpis sit amet lorem rutrum ullamcorper sed sed dui. vestibulum odio at elementum. Suspendisse et condimentum nibh.</p>
						<div class="app-buttons">
							<div class="app-button">
								<a href="#"><img src="images/1.png" alt=""></a>
							</div>
							<div class="app-button">
								<a href="#"><img src="images/2.png" alt=""></a>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>


<?php include 'inc/foter.php'; ?> 