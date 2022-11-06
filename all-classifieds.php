<?php include 'inc/hader.php'; ?>
<?php include 'inc/templect/baner.php'; ?> 


	<!-- Products -->
	<div class="total-ads main-grid-border">
		<div class="container">


        <?php include 'inc/templect/scarch.php'; ?> 
        <?php include 'inc/templect/cat-list.php'; ?> 








			<ol class="breadcrumb" style="margin-bottom: 5px;">
			  <li><a href="index.php">Home</a></li>
			  <li class="active">All Ads</li>
			</ol>
			<div class="ads-grid">
				


				<?php include 'inc/templect/side-bar.php'; ?> 



				<div class="ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text">All Ads</span>
						  </a>
						</li>
						<li role="presentation" class="next">
						  <a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
							<span class="text">Ads with Photos</span>
						  </a>
						</li>
						
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
							 <div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="clearfix"></div>
							<ul class="list">
								<a href="single.php">
									<li>
									<img src="images/m1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
							</ul>
						</div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
						 <div>
												<div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label>view :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="sort">
								   <div class="sort-by">
										<label>Sort By : </label>
										<select>
														<option value="">Most recent</option>
														<option value="">Price: Rs Low to High</option>
														<option value="">Price: Rs High to Low</option>
										</select>
									   </div>
									 </div>
								<div class="clearfix"></div>
							<ul class="list">


								<a href="single.php">
									<li>
									<img src="images/m1.jpg" title="" alt="" />
									<section class="list-left">
									<h5 class="title">There are many variations of passages of Lorem Ipsum</h5>
									<span class="adprice">$290</span>
									<p class="catpath">Mobile Phones » Brand</p>
									</section>
									<section class="list-right">
									<span class="date">Today, 17:55</span>
									<span class="cityname">City name</span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>
							</ul>
						</div>
							</div>
						</div>




						<ul class="pagination pagination-sm">
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">6</a></li>
							<li><a href="#">7</a></li>
							<li><a href="#">8</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					  </div>
					</div>
				</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>	
	</div>
	<!-- // Products -->
	
	<?php include 'inc/foter.php'; ?> 