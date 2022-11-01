<div class="categories">
				<div class="container">
					 <?php
                          $query = "select * from category";
                          $post = $db->select($query);
                          if ($post) {
                            while ($result= $post -> fetch_assoc()) {
                            ?>



					<div class="col-md-2 focus-grid">
						<a href="categories.php#parentVerticalTab2">
							<div class="focus-border">
								<div class="focus-layout">
									<div class="focus-image">
										<img class="caticon" src="uploads/<?php echo $result['icon']; ?>">
									</div>
									<h4 class="clrchg"> <?php echo $result[$lang.'_title']; ?></h4>
								</div>
							</div>
						</a>
					</div>


					<?php }} ?>

					
					<div class="clearfix"></div>
				</div>
			</div>