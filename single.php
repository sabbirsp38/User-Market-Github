<?php include 'inc/hader.php'; ?> 

	<div class="banner text-center">
	  <div class="container">    
			<h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with Resale</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
			<a href="post-ad.html">Post Free Ad</a>
	  </div>
	</div>
	<!--single-page-->

	      <?php

          if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
            header("Location: 404.php") ;
           
          }else{
             $id= $_GET['$id'];
          }

        ?>
  <?php

                      $query = "select * from adds where id= $id ";
                      $post = $db->select($query);
                      $result= $post -> fetch_assoc()
                        ?>


	<div class="single-page main-grid-border">
		<div class="container">
			<!-- <ol class="breadcrumb" style="margin-bottom: 5px;">
				<li><a href="index.html">Home</a></li>
				<li><a href="all-classifieds.html">All Ads</a></li>
				<li class="active"><a href="mobiles.html">Mobiles</a></li>
				<li class="active">Mobile Phone</li>
			</ol> -->
			<div class="product-desc">
				<div class="col-md-7 product-view">
					<h2><?php echo $result['P_title']; ?></h2>
					<p> <i class="glyphicon glyphicon-map-marker"></i><span><?php echo $result['city']; ?></span>, <span><?php echo $result['county']; ?></span>| Added at <?php echo $result['time']; ?>, Ad ID: <?php echo $result['id']; ?></p>
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="uploads/<?php echo $result['P_imag1']; ?>">
								<img src="uploads/<?php echo $result['P_imag1']; ?>" />
							</li>
							<li data-thumb="uploads/<?php echo $result['P_imag2']; ?>">
								<img src="uploads/<?php echo $result['P_imag2']; ?>" />
							</li>
							<li data-thumb="uploads/<?php echo $result['P_imag3']; ?>">
								<img src="uploads/<?php echo $result['P_imag3']; ?>" />
							</li>
							<li data-thumb="uploads/<?php echo $result['P_imag4']; ?>">
								<img src="uploads/<?php echo $result['P_imag4']; ?>" />
							</li>
						</ul>
					</div>
					<!-- FlexSlider -->
					  <script defer src="js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

						<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
					<!-- //FlexSlider -->
					<div class="product-details">
						<?php echo $result['p_decription']; ?>
					
					</div>
				</div>
				<div class="col-md-5 product-details-grid">
					<div class="item-price">
						<div class="product-price">
							<p class="p-price">Price</p>
							<h3 class="rate">$ <?php echo $result['p_price']; ?></h3>
							<div class="clearfix"></div>
						</div>
						<div class="condition">
							<p class="p-price">Condition</p>
							<h4><?php echo $result['p_condition']; ?></h4>
							<div class="clearfix"></div>
						</div>
						<div class="itemtype">
							<p class="p-price">Item Type</p>
							<h4><?php echo $result['P_item_type']; ?></h4>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="interested text-center">
						<h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
						<p><i class="glyphicon glyphicon-earphone"></i><?php echo $result['p_contact_number']; ?></p>
					</div>
						<div class="tips">
						<h4>Safety Tips for Buyers</h4>
							<ol>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
								<li><a href="#">Contrary to popular belief.</a></li>
							</ol>
						</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//single-page-->


<?php include 'inc/foter.php'; ?> 