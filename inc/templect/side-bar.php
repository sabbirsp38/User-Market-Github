<div class="side-bar col-md-3">
					<div class="search-hotel">
					<h3 class="sear-head">Name contains</h3>
					<form>
						<input type="text" value="Product name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product name...';}" required="">
						<input type="submit" value=" ">
					</form>
				</div>
				
			
				<div class="featured-ads">
					<h2 class="sear-head fer">Featured Ads</h2>



					 <?php
                          $query = "SELECT * FROM adds
ORDER BY RAND()
LIMIT 6;";
                          $post = $db->select($query);
                          if ($post) {
                            while ($result= $post -> fetch_assoc()) {
                            ?>


					<div class="featured-ad">
						<a href="single.php? $id=<?php echo $result['id']; ?>">
							<div class="featured-ad-left">
								<img src="uploads/<?php echo $result['P_imag1']; ?>" title="ad image" alt="" />
							</div>
							<div class="featured-ad-right">
								<h4><?php echo $result['P_title']; ?></h4>
								<p>€ <?php echo $result['p_price']; ?></p>
							</div>
							<div class="clearfix"></div>
						</a>
					</div>

					 <?php }} ?>


					
					<div class="clearfix"></div>
				</div>
				</div>