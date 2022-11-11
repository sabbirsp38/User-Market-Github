<?php include 'inc/hader.php'; ?>
<?php include 'inc/templect/baner.php'; ?> 


	<!-- Products -->
	<div class="total-ads main-grid-border">
		<div class="container">


        <?php include 'inc/templect/scarch.php'; ?> 
        <?php include 'inc/templect/cat-list.php'; ?> 





  <?php 
                  $per_page = 9;
                  if (isset($_GET["page"])) {
                    $page= $_GET["page"];
                  }else{
                    $page =1;
                  }
                  $start_from = ($page-1) * $per_page;
                  ?>
                       <?php
                        
                      $query = "select * from adds "; 
                      $result = $db->select($query);
                      $total_rows = mysqli_num_rows($result);
                      $total_page = ceil ($total_rows/$per_page);
                      ?>


			<ol class="breadcrumb" style="margin-bottom: 5px;">
			  <li><a href="index.php"><?php echo $language["Home"]; ?></a></li>
			  <li class="active"><?php echo $language["All_Ads"]; ?></li>
			</ol>
			<div class="ads-grid">
				


				<?php  include 'inc/templect/side-bar.php'; ?> 



				<div class="ads-display col-md-9">
					<div class="wrapper">					
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					  <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
						<li role="presentation" class="active">
						  <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
							<span class="text"><?php echo $language["All_Ads"]; ?></span>
						  </a>
						</li>
						
						
					  </ul>
					  <div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						   <div>
							 <div id="container">
								<div class="view-controls-list" id="viewcontrols">
									<label><?php echo $language["view"]; ?> :</label>
									<a class="gridview"><i class="glyphicon glyphicon-th"></i></a>
									<a class="listview active"><i class="glyphicon glyphicon-th-list"></i></a>
								</div>
								<div class="clearfix"></div>
							<ul class="list">

 <?php
                          $query = "select * from adds order by id desc limit $start_from, $per_page";
                          $post = $db->select($query);
                          if ($post) {
                            while ($result= $post -> fetch_assoc()) {
                            ?>


								<a href="single.php? $id=<?php echo $result['id']; ?>">
									<li>
									<img src="uploads/<?php echo $result['P_imag1']; ?>" title="" alt="" />
									<section class="list-left">
									<h5 class="title"><?php echo $result['P_title']; ?></h5>
									<span class="adprice"><?php echo $result['p_price']; ?></span>
									<p class="catpath"><?php echo $result['p_condition']; ?></p>
									</section>
									<section class="list-right">
									<span class="date"><?php $dbtime =strtotime($result['time']);echo  date("Y-m-d", "$dbtime")?></span>
									<span class="cityname"><?php echo $result['city']; ?>,<?php echo $result['county']; ?></span>
									</section>
									<div class="clearfix"></div>
									</li> 
								</a>



<?php }?>



							</ul>
						</div>
							</div>
						</div>




				



						<ul class="pagination pagination-sm">

 <?php
                      $query = "select * from adds"; 
                      $result = $db->select($query);
                      $total_rows = mysqli_num_rows($result);
                      $total_page = ceil ($total_rows/$per_page);?>

                      <?php
                      echo " <li><a href='all-classifieds.php?page=1'> ".$language['First_Page']." </a></li>";

                      for ($i=1; $i<= $total_page; $i++) { 
                       echo "<li><a class='page-numbers' href='all-classifieds.php?page=".$i." '>".$i. "</a></li>";
                       } 


                       echo "<li><a href='all-classifieds.php?page=$total_page'> ".$language['Last_Page']. " </a></span></li>"?>

                      
             
               

                  <!--paginetation-->
  
    
    <?php } ?>
							




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