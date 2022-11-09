<?php include 'inc/hader.php'; ?> 
<?php include 'inc/templect/baner.php'; ?> 


	<!-- Categories -->
	<!--Vertical Tab-->
	<div class="categories-section main-grid-border">
		<div class="container">
			<h2 class="head">Main Categories</h2>
			<div class="category-list">
				<div id="parentVerticalTab">
					<ul class="resp-tabs-list hor_1">
						 <?php
 if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
            header("Location: 404.php") ;
           
          }else{
             $id= $_GET['$id'];
          }
                          $query = "select * from category where cat_id=$id";
                          $post = $db->select($query);
                          if ($post) {
                           $result= $post -> fetch_assoc();
                            ?>
						<li><?php echo $result[$lang.'_title']; ?></li>

						<?php } ?>
						<a href="categories.php">View all Categories</a>
					</ul>
					<div class="resp-tabs-container hor_1">
						<span class="active total" style="display:block;" data-toggle="modal" data-target="#myModal"><strong>All USA</strong> (Select your city to see local ads)</span>

			 <?php
		
                          $query = "select * from category where cat_id=$id";
                          $post = $db->select($query);
                          if ($post) {
                            $result= $post -> fetch_assoc();
                            ?>
						<div>
						
							<div class="category">
								<div class="category-img">
									<img src="uploads/<?php echo $result['icon']; ?>" title="image" alt="" />
								</div>
								<div class="category-info">
									<h4><?php echo $result[$lang.'_title']; ?></h4>

										<?php 

										$gat_cat2= $result['cat_id']; 

										$sql="select * from adds where P_catagory = $gat_cat2";


										if ($result3=mysqli_query($con,$sql))
										{
										// Return the number of rows in result3 set
										$rowcount=mysqli_num_rows($result3); ?>
										<span><?php echo $rowcount; ?> Ads</span>
										<?php
										// Free result3 set
										mysqli_free_result($result3);
										}




										?>

									
									<a href="cat-ads.php? $id=<?php echo $result['cat_id']; ?>">View all Ads</a>
								</div>
								<div class="clearfix"></div>
							</div>


							


        
							<div class="sub-categories">
								<ul>

						
						
 <?php                   


                        

 						 $gat_cat= $result['cat_id']; 
                          $query2 = "select * from sub_catagory where parent_cat = $gat_cat";
                          $post2 = $db->select($query2);
                          if ($post2) {
                            while ($result2= $post2 -> fetch_assoc()) {
                            ?>
						
									<li><a href="ads-sub.php? $id=<?php echo $result['id']; ?>"><?php echo $result2[$lang.'_name']; ?></a></li>
								<?php }} ?>
									<div class="clearfix"></div>
								</ul>
							</div>



						</div>


<?php }?>
						




					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>




	<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
	<!-- //Categories -->
	


	<?php include 'inc/foter.php'; ?> 