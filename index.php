<?php 


 include 'inc/hader.php'; 



  require_once ("inc/templect/baner.php");




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
					<h2><?php echo $language["Trending_Ads"]; ?> </h2>
							<ul id="flexiselDemo3">
								<li>

                    <?php
                          $query = "SELECT * FROM adds
ORDER BY RAND()
LIMIT 4;";
                          $post = $db->select($query);
                          if ($post) {
                            while ($result= $post -> fetch_assoc()) {
                            ?>
									<div class="col-md-3 biseller-column">
										<a href="single.php? $id=<?php echo $result['id']; ?>">
											<img src="uploads/<?php echo $result['P_imag1']; ?>"/>
											<span class="price">&#36; <?php echo $result['p_price']; ?></span>
										</a> 
										<div class="ad-info">
											<h5><?php echo $result['P_title']; ?></h5>
											<span><?php echo $result['time']; ?></span>
										</div>
									</div>

                            <?php }} ?>

									
									
								</li>
								<li>

                    <?php
                          $query = "SELECT * FROM adds
ORDER BY RAND()
LIMIT 4;";
                          $post = $db->select($query);
                          if ($post) {
                            while ($result= $post -> fetch_assoc()) {
                            ?>
									<div class="col-md-3 biseller-column">
										<a href="single.php? $id=<?php echo $result['id']; ?>">
											<img src="uploads/<?php echo $result['P_imag1']; ?>"/>
											<span class="price">€ <?php echo $result['p_price']; ?></span>
										</a> 
										<div class="ad-info">
											<h5><?php echo $result['P_title']; ?></h5>
											<span><?php echo $result['time']; ?></span>
										</div>
									</div>

                            <?php }} ?>

									
									
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
			<!-- <div class="mobile-app">
				<div class="container">
					<div class="col-md-5 app-left">
						<a href="mobileapp.php"><img src="images/app.png" alt=""></a>
					</div>
					<div class="col-md-7 app-right">
						<h3><?php //echo $language["LIST_TITLE"]; ?> </h3>
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
			</div> -->
		</div>


<?php include 'inc/foter.php'; ?> 