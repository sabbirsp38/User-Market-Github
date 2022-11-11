
			<div class="all-categories">
				<h3> <?php echo $language["Select_your_category_and_find_the_perfect_ad"]; ?></h3>
				<ul class="all-cat-list">

						 <?php

                          $query = "select * from category";
                          $post = $db->select($query);
                          if ($post) {
                            while ($result= $post -> fetch_assoc()) {
                            ?>

					<li><a href="cat-ads.php? $id=<?php echo $result['cat_id']; ?>">


						<?php echo $result[$lang.'_title']; ?>


						<span class="num-of-ads">(<?php 

										$gat_cat2= $result['cat_id']; 

										$sql="select * from adds where P_catagory = $gat_cat2";


										if ($result3=mysqli_query($con,$sql))
										{
										// Return the number of rows in result3 set
										$rowcount=mysqli_num_rows($result3); ?>
										<span><?php echo $rowcount; ?> <?php echo $language["Ads"]; ?></span>
										<?php
										// Free result3 set
										mysqli_free_result($result3);
										}




										?>
)</span></a>




					</li>


                         <?php }} ?>


				</ul>
			</div>